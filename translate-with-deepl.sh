#!/usr/bin/env bash
# Explanation of the command line
# deepl translate           tells the DeepL CLI to start translating
#  {}                       is the current found filename injected by the 'find' command
#  --output readme.nl.md    will create a file on the same directory as where the file was found
#  --to nl                  translate to nl language (dutch)
# --preserve-code           ignore text contained in code-block markers. ( `....` or ```php ... ```)
#

set -euo pipefail

if [[ $# -ne 1 ]]; then
    echo "Usage: $0 <source-file.md>" >&2
    exit 1
fi

src="$1"
dst="${src%.md}.nl.md"

echo "Translating: $src -> $dst"

deepl translate \
    --from en \
    --preserve-code \
    --to nl \
    "$src" \
    --output "$dst"
