#!/usr/bin/env python3
# This script was entirely generated using ChatGPT.

from pathlib import Path
import html
import re
import sys


OUTPUT_FILENAME = "index.html"
CSS_FILENAME = "style.css"
ROOT_INDEX_FILENAME = "index.html"
README_FILENAME = "readme.md"


def is_week_directory(path: Path) -> bool:
    """
    Een geldige weekfolder heeft het formaat:

        week01
        week02
        week03
        ...
        week52
    """

    return bool(
        re.fullmatch(
            r"week\d{2}",
            path.name,
            re.IGNORECASE,
        )
    )


def is_number_directory(path: Path) -> bool:
    """
    Controleert of een mapnaam uitsluitend uit cijfers bestaat.

    Bijvoorbeeld:

        01   -> geldig
        02   -> geldig
        123  -> geldig
        test -> ongeldig
    """

    return path.name.isdigit()


def find_readme(item_dir: Path) -> Path | None:
    """
    Zoek in een map naar readme.md, ongeacht hoofdletters.
    """

    for path in item_dir.iterdir():

        if (
            path.is_file()
            and path.name.casefold()
            == README_FILENAME.casefold()
        ):
            return path

    return None


def parse_week_titles(
    root_index_path: Path,
) -> dict[str, str]:
    """
    Leest de root index.html en haalt de weektitels eruit.

    Verwacht bijvoorbeeld:

        <tr>
            <td><a href="week01">Week 1</a></td>
            <td>Basic HTML</td>
            <td>Basic PHP</td>
        </tr>

    Dit wordt:

        {
            "week01": "Week 1 - Basic HTML - Basic PHP"
        }

    De HTML wordt bewust met een eenvoudige parser via regex
    gelezen, omdat we alleen de eenvoudige tabelstructuur
    hoeven te verwerken.
    """

    titles = {}

    if not root_index_path.is_file():
        print(
            f"Waarschuwing: root index.html ontbreekt: "
            f"{root_index_path}"
        )
        return titles

    try:
        text = root_index_path.read_text(
            encoding="utf-8"
        )

    except (UnicodeDecodeError, OSError) as exc:
        print(
            f"Waarschuwing: kan root index.html niet lezen: "
            f"{exc}"
        )
        return titles

    # Zoek alle tabelrijen.
    rows = re.findall(
        r"<tr\b[^>]*>(.*?)</tr>",
        text,
        re.IGNORECASE | re.DOTALL,
    )

    for row in rows:

        # Zoek de drie TD's in deze rij.
        cells = re.findall(
            r"<td\b[^>]*>(.*?)</td>",
            row,
            re.IGNORECASE | re.DOTALL,
        )

        if len(cells) < 3:
            continue

        week_cell = cells[0]
        html_cell = cells[1]
        php_cell = cells[2]

        # Zoek href="week03", href='week03', etc.
        href_match = re.search(
            r'href\s*=\s*["\'](week\d{2})["\']',
            week_cell,
            re.IGNORECASE,
        )

        if not href_match:
            continue

        week_name = href_match.group(1).lower()

        # Strip HTML-tags uit de cellen.
        week_label = re.sub(
            r"<[^>]+>",
            "",
            week_cell,
        )

        html_title = re.sub(
            r"<[^>]+>",
            "",
            html_cell,
        )

        php_title = re.sub(
            r"<[^>]+>",
            "",
            php_cell,
        )

        # HTML entities terug omzetten.
        week_label = html.unescape(
            week_label
        ).strip()

        html_title = html.unescape(
            html_title
        ).strip()

        php_title = html.unescape(
            php_title
        ).strip()

        # Combineer de drie kolommen.
        #
        # Week 2 - Layouts - Conditionals
        combined_title = " - ".join(
            value
            for value in (
                week_label,
                html_title,
                php_title,
            )
            if value
        )

        titles[week_name] = combined_title

    return titles


def parse_title(title: str) -> dict:
    """
    Verwerkt een README H1 volgens:

        # week 2 - PHP - bla bla

    Resultaat:

        taal  = PHP
        titel = bla bla

    De informatie uit de root index.html heeft voorrang
    voor de titel van de HTML-pagina.
    """

    title = title.strip()

    match = re.match(
        r"^week\s*\d+\s*-\s*(.+?)\s*-\s*(.+)$",
        title,
        re.IGNORECASE,
    )

    if match:

        language = match.group(1).strip()
        entry_title = match.group(2).strip()

        return {
            "language": language,
            "title": entry_title,
        }

    print(
        f"  Waarschuwing: titel heeft niet het verwachte "
        f"formaat: {title!r}"
    )

    return {
        "language": "",
        "title": title,
    }


def extract_readme_data(
    readme_path: Path,
) -> dict | None:
    """
    Haalt uit README.md:

    - de eerste H1
    - de taal uit de H1
    - de titel uit de H1
    - de eerste paragraaf na de H1
    """

    try:
        text = readme_path.read_text(
            encoding="utf-8"
        )

    except UnicodeDecodeError:
        print(
            f"Waarschuwing: geen UTF-8: "
            f"{readme_path}"
        )
        return None

    except OSError as exc:
        print(
            f"Waarschuwing: kan "
            f"{readme_path} niet lezen: {exc}"
        )
        return None

    lines = (
        text
        .replace("\r\n", "\n")
        .replace("\r", "\n")
        .split("\n")
    )

    # --------------------------------------------------------
    # Zoek eerste H1
    # --------------------------------------------------------

    h1_index = None
    raw_title = None

    for index, line in enumerate(lines):

        match = re.match(
            r"^\s*#\s+(.+?)\s*#*\s*$",
            line,
        )

        if match:
            h1_index = index
            raw_title = match.group(1).strip()
            break

    if h1_index is None:
        return None

    # --------------------------------------------------------
    # Titel verwerken
    # --------------------------------------------------------

    title_data = parse_title(
        raw_title
    )

    # --------------------------------------------------------
    # Eerste paragraaf na H1
    # --------------------------------------------------------

    paragraph_lines = []
    started = False

    for line in lines[h1_index + 1:]:

        stripped = line.strip()

        if not stripped:

            if started:
                break

            continue

        # Stop bij volgende heading
        if re.match(
            r"^\s{0,3}#{1,6}\s+",
            line,
        ):
            break

        # Stop bij horizontale lijn
        if re.match(
            r"^\s*([-*_])(?:\s*\1){2,}\s*$",
            line,
        ):

            if started:
                break

            continue

        started = True

        paragraph_lines.append(
            stripped
        )

    paragraph = " ".join(
        paragraph_lines
    )

    return {
        "title": title_data["title"],
        "language": title_data["language"],
        "paragraph": paragraph,
        "path": readme_path,
    }


def markdown_inline_to_html(
    text: str,
) -> str:
    """
    Zet eenvoudige Markdown inline-opmaak om naar HTML.

    Ondersteund:

        **vet**
        __vet__
        *cursief*
        _cursief_
        `code`
        [linktekst](https://example.com)
    """

    # Eerst HTML escapen.
    result = html.escape(
        text,
        quote=True,
    )

    # --------------------------------------------------------
    # Links
    # --------------------------------------------------------

    result = re.sub(
        r"\[([^\]]+)\]\(([^)\s]+)(?:\s+['\"]([^'\"]*)['\"])?\)",
        lambda m: (
            f'<a href="{m.group(2)}"'
            + (
                f' title="{m.group(3)}"'
                if m.group(3)
                else ""
            )
            + f'>{m.group(1)}</a>'
        ),
        result,
    )

    # --------------------------------------------------------
    # Inline code
    # --------------------------------------------------------

    result = re.sub(
        r"`([^`]+)`",
        r'<span class="code">\1</span>',
        result,
    )

    # --------------------------------------------------------
    # Vet
    # --------------------------------------------------------

    result = re.sub(
        r"\*\*(.+?)\*\*",
        r'<span class="bold">\1</span>',
        result,
    )

    result = re.sub(
        r"__(.+?)__",
        r'<span class="bold">\1</span>',
        result,
    )

    # --------------------------------------------------------
    # Cursief
    # --------------------------------------------------------

    result = re.sub(
        r"(?<!\*)\*([^*]+?)\*(?!\*)",
        r'<span class="italic">\1</span>',
        result,
    )

    result = re.sub(
        r"(?<!\w)_([^_]+?)_(?!\w)",
        r'<span class="italic">\1</span>',
        result,
    )

    return result


def generate_html(
    week_dir: Path,
    root_dir: Path,
    entries: list[dict],
    week_title: str | None,
) -> None:
    """
    Genereert index.html in de weekfolder.

    De titel wordt afkomstig uit de root index.html.
    """

    output_path = week_dir / OUTPUT_FILENAME

    # Sorteer op mapnummer
    entries.sort(
        key=lambda item: int(item["path"].parent.name)
    )

    rows = []

    for entry in entries:
        readme_path = entry["path"]
        item_dir = readme_path.parent

        # Relatief pad naar de numerieke map
        relative_dir = item_dir.relative_to(week_dir)
        href = relative_dir.as_posix() + "/"

        title = html.escape(entry["title"])
        language = html.escape(entry["language"])
        paragraph = markdown_inline_to_html(entry["paragraph"])
        map_name = html.escape(relative_dir.name)

        rows.append(
            f"""            <tr>
                <td><strong>{title}</strong></td>
                <td>{language}</td>
                <td><a href="{html.escape(href, quote=True)}">{map_name}</a></td>
                <td>{paragraph}</td>
            </tr>"""
        )

    if rows:
        table_rows = "\n".join(rows)
    else:
        table_rows = """            <tr>
                <td colspan="4" class="empty">No README.md files found.</td>
            </tr>"""

    # Titel afkomstig uit de root index.html
    if week_title:
        page_title = week_title
    else:
        match = re.fullmatch(
            r"week(\d{2})",
            week_dir.name,
            re.IGNORECASE,
        )

        if match:
            page_title = f"Week {match.group(1)}"
        else:
            page_title = week_dir.name

    page_title = html.escape(page_title)

    # style.css staat in de hoofdmap
    css_href = f"../{CSS_FILENAME}"

    # Compacte HTML zonder overbodige lege regels
    html_content = f"""<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{page_title}</title>
    <link rel="stylesheet" href="{html.escape(css_href, quote=True)}">
</head>
<body>
    <main>
        <h1>{page_title}</h1>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Language</th>
                    <th>Folder</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
{table_rows}
            </tbody>
        </table>
    </main>
</body>
</html>
"""

    output_path.write_text(
        html_content,
        encoding="utf-8",
    )

    print(
        f"  {week_dir.name}: "
        f"{len(entries)} README(s) → {output_path}"
    )



def process_week_directory(
    week_dir: Path,
    root_dir: Path,
    week_titles: dict[str, str],
) -> None:
    """
    Verwerkt uitsluitend numerieke mappen die direct
    onder de weekfolder staan.
    """

    entries = []

    item_dirs = sorted(
        path
        for path in week_dir.iterdir()
        if path.is_dir()
        and is_number_directory(path)
    )

    for item_dir in item_dirs:

        # ----------------------------------------------------
        # Case-insensitive README zoeken
        # ----------------------------------------------------

        readme_path = find_readme(
            item_dir
        )

        if readme_path is None:

            print(
                f"  Geen readme.md: "
                f"{item_dir}"
            )

            continue

        # ----------------------------------------------------
        # README verwerken
        # ----------------------------------------------------

        data = extract_readme_data(
            readme_path
        )

        if data is None:

            print(
                f"  Overgeslagen (geen H1): "
                f"{readme_path}"
            )

            continue

        entries.append(
            data
        )

    # --------------------------------------------------------
    # Zoek titel uit root index.html
    # --------------------------------------------------------

    week_title = week_titles.get(
        week_dir.name.lower()
    )

    if week_title:

        print(
            f"  Titel: {week_title}"
        )

    else:

        print(
            f"  Waarschuwing: "
            f"{week_dir.name} staat niet in "
            f"de root index.html"
        )

    generate_html(
        week_dir,
        root_dir,
        entries,
        week_title,
    )


def main() -> None:
    """
    Verwerkt de structuur:

        project/
        ├── index.html
        ├── generate_index.py
        ├── style.css
        │
        ├── week01/
        │   ├── 01/
        │   │   └── readme.md
        │   ├── 02/
        │   │   └── readme.md
        │   └── index.html
        │
        └── week02/
            ├── 01/
            │   └── readme.md
            └── index.html
    """

    if len(sys.argv) > 1:

        root_dir = Path(
            sys.argv[1]
        ).resolve()

    else:

        root_dir = Path.cwd()

    # --------------------------------------------------------
    # Controleer root directory
    # --------------------------------------------------------

    if not root_dir.is_dir():

        print(
            f"Fout: directory bestaat niet: "
            f"{root_dir}"
        )

        sys.exit(1)

    # --------------------------------------------------------
    # Lees root index.html
    # --------------------------------------------------------

    root_index_path = (
        root_dir
        / ROOT_INDEX_FILENAME
    )

    print(
        f"Root index: "
        f"{root_index_path}"
    )

    week_titles = parse_week_titles(
        root_index_path
    )

    print(
        f"Weektitels gevonden: "
        f"{len(week_titles)}"
    )

    print()

    # --------------------------------------------------------
    # Controleer CSS
    # --------------------------------------------------------

    css_path = (
        root_dir
        / CSS_FILENAME
    )

    if not css_path.exists():

        print(
            f"Waarschuwing: "
            f"{CSS_FILENAME} ontbreekt "
            f"in {root_dir}"
        )

    # --------------------------------------------------------
    # Zoek alleen week## folders
    # --------------------------------------------------------

    week_dirs = sorted(
        path
        for path in root_dir.iterdir()
        if path.is_dir()
        and is_week_directory(path)
    )

    if not week_dirs:

        print(
            "Geen week##-folders gevonden."
        )

        return

    # --------------------------------------------------------
    # Verwerk iedere week
    # --------------------------------------------------------

    for week_dir in week_dirs:

        print(
            f"Verwerken: "
            f"{week_dir.name}"
        )

        process_week_directory(
            week_dir,
            root_dir,
            week_titles,
        )

        print()

    print(
        "Klaar."
    )


if __name__ == "__main__":
    main()
