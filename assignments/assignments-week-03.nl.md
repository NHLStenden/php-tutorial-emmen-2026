# Opdrachten week 3

# HTML

## Opdracht 1 – maak een recept voor een omelet

De eerste opdracht bestaat uit het namaken van een webpagina zoals weergegeven in de afbeelding bij de opdracht. Enkele belangrijke elementen, zoals kleuren,
afbeeldingen, enz., worden je aangereikt. Lees de opdracht grondig door voordat je begint. Na voltooiing zullen de
volgende opdrachten betrekking hebben op PHP-functies, het maken van functies en het gebruik van reeds beschikbare functies om
de opdracht te voltooien. Veel succes!

**Implementeer het volgende**

Bekijk de afbeelding hieronder. Maak de getoonde website zo goed mogelijk na.

![assignment-week-03a.jpeg](images/assignment-week-03a.jpeg)

Breedte, hoogte en plaatsing: Er worden geen specifieke gegevens verstrekt over de breedte, hoogte of plaatsing van de webpagina. Doe je
best om de afbeelding na te maken.

Kleuren: De volgende kleuren worden samen met de HSL-waarden verstrekt om ze met CSS te kunnen maken. Als je niet weet hoe je HSL
moet gebruiken om kleuren op te geven, ga dan naar deze pagina: https://developer.mozilla.org/en-US/docs/Web/CSS/color_value/hsl

* Wit – hsl(0%, 0%, 100%)
* Stone 100 – hsl(30, 54%, 90%)
* Stone 150 – hsl(30, 18%, 87%)
* Steen 600 – hsl(30, 10%, 34%)
* Steen 900 – hsl(24, 5%, 18%)
* Bruin 800 – hsl(14, 45%, 36%)
* Rose 800  – hsl(332, 51%, 32%)
* Rose 50   – hsl(330, 100%, 98%)

Lettertypen: De standaard lettergrootte is 16px. Stel de lettergrootte in de <body> in met behulp van CSS. De volgende informatie wordt
verstrekt:

* Font-Family: Young-Serif; font-weights: 400. Font-Family: Outfit; font-weights: 400, 600, 700.

* Font-family en font-weight zijn CSS-elementen die worden gebruikt om tekst op te maken. De lettertypen worden als bestanden aangeleverd in de
  map ‘fonts’.

Gebruik de volgende regel in je CSS om dit nieuwe lettertype toe te voegen:

```css
@font-face {
    font-family: "name-of-your-font";
    src: url("link to your fontfile");
}

body {
    font-family: “name-of-your-font”
}
```

Afbeeldingen: Afbeeldingen worden aangeleverd via de map img.

# PHP-programmeren - Functies

De opdrachten van deze week gaan over het schrijven van functies. 

## Schrijf de functies ‘explode()’ en ‘join()’ of ‘implode()’

In PHP zijn er twee functies om een array op te splitsen of samen te voegen

* `join()` / `implode()`: [php](https://www.php.net/manual/en/function.implode.php)
* explode(): [php](https://www.php.net/manual/en/function.explode.php)

Schrijf deze twee functies zelf, waarbij je alleen de eenvoudigste vorm gebruikt: een scheidingsteken en een array.

## Opdracht 2 - je dieet 

Implementeer het volgende

Schrijf een functie die een lijst met voedingsstoffen retourneert in de vorm van een HTML-tabel. De lijst moet worden opgemaakt met CSS.

De functie neemt 5 parameters aan, waarvan de eerste 4 getallen zijn: Calorieën, Koolhydraten, Eiwitten en Vet. De laatste parameter
is een Booleaanse waarde (TRUE of FALSE). Op basis van de Booleaanse waarde moet de uiteindelijke uitvoer van de lijst aangeven of het product past binnen je dieet (Dieet
goedgekeurd/afgekeurd).

## Opdracht 3 - Ouderlijke controle op video's

Implementeer het volgende

Een klant heeft je gevraagd een functie te maken die registraties voor de website van zijn videotheek automatisch indexeert.
De volgende voorwaarden moeten in de applicatie worden opgenomen. Op basis van verschillende factoren wordt een bericht samengesteld
en teruggestuurd naar de klant.

1. Als de gebruiker jonger is dan 18 jaar, bevat het bericht een waarschuwing dat de gebruiker nog niet oud genoeg is om zich te registreren.
2. Als de gebruiker een vrouw is, informeert het bericht de gebruiker over een aankomend ‘ladies night’-evenement in de videotheek.
3. Als de gebruiker de website onlangs heeft bezocht, zal het bericht vermelden dat er bij het afrekenen een korting wordt toegepast.
4. Wanneer aan alle drie de eerder genoemde voorwaarden is voldaan, ziet de gebruiker in plaats van een bericht een grote rode
   WAARSCHUWING!!!.

Omdat de website zich in de testfase bevindt, is het voldoende om eenvoudige berichten op het scherm weer te geven (echo). Wanneer
meerdere voorwaarden vervuld zijn, geef dan alle berichten weer. Wanneer voorwaarde 4 vervuld is, geef dan alleen dit bericht weer.


