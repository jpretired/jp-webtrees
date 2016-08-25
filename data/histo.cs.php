<?php
// Soubor: /data/histo.xx.php (kde xx je kód jazyka, např. "cs" nebo "en_GB")
// Zobrazit historická fakta na stránce osoby v panelu Fakta a události
// Každý řádek je záznam GEDCOM popisující událost
// Události musí obsahovat datum a zobrazí se jen tehdy, když osoba je v době události naživu.
// Řádek má tento formát:
// $histo[] = "1 EVEN\n2 TYPE Title\n2 DATE DD MMM YYYY\n2 NOTE Content of the note";

if (!defined('WT_WEBTREES')) {
   header('HTTP/1.0 403 Forbidden');
   exit;
}

# Války
$histo[] = "1 EVEN\n2 TYPE Válka\n2 DATE 3 SEP 1939\n2 NOTE [Začátek 2. světové války](https://cs.wikipedia.org/wiki/Druh%C3%A1_sv%C4%9Btov%C3%A1_v%C3%A1lka)";
$histo[] = "1 EVEN\n2 TYPE Válka\n2 DATE 8 MAY 1945\n2 NOTE [Konec 2. světové války](https://cs.wikipedia.org/wiki/Druh%C3%A1_sv%C4%9Btov%C3%A1_v%C3%A1lka)";

# Prezidenti republiky
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 14 NOV 1918 TO 14 DEC 1935\n2 NOTE Tomáš Garigue Masaryk";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 18 DEC 1935\n2 NOTE Edvard Beneš";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 30 NOV 1938\n2 NOTE Emil Hácha";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 02 APR 1945\n2 NOTE Edvard Beneš";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 14 JUN 1948\n2 NOTE Klement Gottwald";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 21 MAR 1953\n2 NOTE Antonín Zápotocký";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 19 NOV 1957\n2 NOTE Antonín Novotný";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 30 MAR 1968\n2 NOTE Ludvík Svoboda";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 29 MAY 1975\n2 NOTE Gustáv Husák";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 29 DEC 1989\n2 NOTE Václav Havel";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 07 MAR 2003\n2 NOTE Václav Klaus";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 08 MAR 2013\n2 NOTE Miloš Zeman";
$histo[] = "1 EVEN\n2 TYPE Událost\n2 DATE FROM 1606 TO 1606\n2 NOTE Válka mezi Rudolfem II. a osmanskými Turky.";
$histo[] = "1 EVEN\n2 TYPE Povstání\n2 DATE FROM 1606 TO 1606\n2 NOTE Povstání uherských (slovenských) protestantů pod vedením Štěpána (Istvána) Bočkaje.";
$histo[] = "1 EVEN\n2 TYPE Událost\n2 DATE 23 JUN 1606\n2 NOTE Mír ve Vídni mezi císařem a Bočkajem potvrdil uherským protestantům náboženskou svobodu.";
$histo[] = "1 EVEN\n2 TYPE Událost\n2 DATE 11 NOV 1606\n2 NOTE Mír s Turky uzavřen v Žitavské Toroni na základě statu quo, tj. obě strany si ponechaly ta území, která byla momentálně pod jejich kontrolu. Hranice s osmanskou říší se ustálila zhruba podle dnešní slovensko-maďarské hranice na Dunaji.";

?>