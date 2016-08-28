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

# Panovníci
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1526 TO 1564\n2 NOTE Ferdinand I. (současně král uherský a římský, od r. 1556 císař)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1564 TO 1576\n2 NOTE Maxmilián I. (II.) (současně král uherský a císař římský, jako císař Maxmilián II.)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1576 TO 1611\n2 NOTE Rudolf II. (zároveň král uherský a císař římský. Od r. 1608 vládl jen v Čechách a ve Slezsku. Císař do své smrti v roce 1612,)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1611 TO 1619\n2 NOTE Matyáš I. (II.) (reálně vládl do r. 1618. Současně král uherský a císař římsky od r. 1612. Jako král uherský Matyás II.)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1619 TO 1620\n2 NOTE Fridrich Falcký";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1620 TO 1637\n2 NOTE Ferdinand II. Štýrský. (Současně král uherský a císař římský. Reálně vládl od r. 1620.)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1637 TO 1657\n2 NOTE Ferdinand III. (současně král uherský a císař římský)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1646 TO 1654\n2 NOTE Ferdinand IV. (spoluvladař Ferdinanda III., svého otce. Od r. 1647 také král uherský. Reálně nevládl, zemřel za života svého otce.)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1657 TO 1705\n2 NOTE Leopold I. (současně král uherský a císař římský)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1705 TO 1711\n2 NOTE Josef I. (současně král uherský a císař římský)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1711 TO 1740\n2 NOTE Karel II. (VI.) (jako císař římský Karel VI. Současně král uherský)";
$histo[] = "1 EVEN\n2 TYPE Dynastie\n2 DATE 1740\n2 NOTE Vymření habsburské dynastie po meči.";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1740 TO 1780\n2 NOTE Marie Terezie (současně královna uherská. Ženská linie habsburské dynastie.)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1741 TO 1742\n2 NOTE Karel Albrecht (Karel III.) (Kurfiřt bavorský, císař 1742 – 1745. Vzdorokrál.)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1780 TO 1790\n2 NOTE Josef II. (současně král uherský, císař od r. 1765)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1790 TO 1792\n2 NOTE Leopold II. (současně král uherský a císař římský)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1792 TO 1835\n2 NOTE František (Franz) II. (současně král uherský, císař římský do r. 1806, od r. 1804 císař rakouský jako František I.)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1835 TO 1848\n2 NOTE Ferdinand V. (současně král uherský a císař rakouský jako Ferdinand I.)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1848 TO 1916\n2 NOTE František Josef (Franz Joseph) I. (současně král uherský a císař rakouský)";
$histo[] = "1 EVEN\n2 TYPE Panovník\n2 DATE FROM 1916 TO 1918\n2 NOTE Karel (jako císař rakouský Karel I., jako král český a král uherský Karel/Karoly IV.)";

# Prezidenti republiky
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 14 NOV 1918 TO 14 DEC 1935\n2 NOTE Tomáš Garigue Masaryk";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 18 DEC 1935 TO 5 OCT 1938\n2 NOTE Edvard Beneš";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 30 NOV 1938 TO 9 MAY 1945\n2 NOTE Emil Hácha";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 02 APR 1945 TO 7 JUN 1948\n2 NOTE Edvard Beneš";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 14 JUN 1948 TO 14 MAR 1953\n2 NOTE Klement Gottwald";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 21 MAR 1953 TO 13 NOV 1957\n2 NOTE Antonín Zápotocký";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 19 NOV 1957 TO 28 MAR 1968\n2 NOTE Antonín Novotný";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 30 MAR 1968 TO 28 MAY 1975\n2 NOTE Ludvík Svoboda";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 29 MAY 1975 TO 10 DEC 1989\n2 NOTE Gustáv Husák";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 29 DEC 1989 TO 2 FEB 2003\n2 NOTE Václav Havel";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE FROM 07 MAR 2003 TO 4 MAR 2013\n2 NOTE Václav Klaus";
$histo[] = "1 EVEN\n2 TYPE Prezident republiky\n2 DATE 08 MAR 2013\n2 NOTE Miloš Zeman";
$histo[] = "1 EVEN\n2 TYPE Válka\n2 DATE FROM 1606 TO 1606\n2 NOTE Válka mezi Rudolfem II. a osmanskými Turky.";
$histo[] = "1 EVEN\n2 TYPE Povstání\n2 DATE FROM 1606 TO 1606\n2 NOTE Povstání uherských (slovenských) protestantů pod vedením Štěpána (Istvána) Bočkaje.";
$histo[] = "1 EVEN\n2 TYPE Událost\n2 DATE 23 JUN 1606\n2 NOTE Mír ve Vídni mezi císařem a Bočkajem potvrdil uherským protestantům náboženskou svobodu.";
$histo[] = "1 EVEN\n2 TYPE Událost\n2 DATE 11 NOV 1606\n2 NOTE Mír s Turky uzavřen v Žitavské Toroni na základě statu quo, tj. obě strany si ponechaly ta území, která byla momentálně pod jejich kontrolu. Hranice s osmanskou říší se ustálila zhruba podle dnešní slovensko-maďarské hranice na Dunaji.";
$histo[] = "1 EVEN\n2 TYPE Vzpoura\n2 DATE MAY 1608\n2 NOTE Vzpoura uherských a moravských protestantských stavů proti Rudolfovi. Do čela se postavil Rudolfův bratr Matyáš.";
$histo[] = "1 EVEN\n2 TYPE Událost\n2 DATE 25 JUN 1608\n2 NOTE Mír v Libni u Prahy. Rudolf postoupil vládu nad Uhrami, Moravou a Lužicí Matyášovi a ponechal si pouze Čechy a Slezsko. Matyáš byl uznán i v Čechách a ve Slezsku za Rudolfova nástupce.";
$histo[] = "1 EVEN\n2 TYPE Svoboda\n2 DATE 9 JUL 1609\n2 NOTE Pod tlakem protestantské šlechty císař Rudolf II. vydal zvláštní listinu (majestát) zaručující v Čechách náboženskou svobodu.";
$histo[] = "1 EVEN\n2 TYPE Svoboda\n2 DATE 20 AUG 1609\n2 NOTE Majestát o náboženské svobodě vydán také pro Slezsko.";
?>