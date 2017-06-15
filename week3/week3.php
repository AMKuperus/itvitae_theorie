<?php

//Experimenteer met strings en pas single & double quotes toe
//Experimenteer met string met variables met zowel single en double quotes
//Pas naast \n nog meer control characters toe
$var = 'Variable';
//Single quotes example
echo 'This is a string with single quotes where we have to concatenate ' . $var .
      ' with  closing the \' \' and useing a .<br>' . PHP_EOL;
//Double quotes example
echo "In a string\040made with double \"\" you can use $var directly inside the quotes.<br>\n";

//Pas Heredoc en Nowdoc toe in een bestand
//Heredoc example
$heredoc = <<<HERE
<hr>Right about know this is $var.<br>\n
HERE;

echo $heredoc;

//Nowdoc example
$nowdoc = <<<'NOW'
<hr>Now $var is like that in nowdoc<br>\n.<hr>
NOW;

echo $nowdoc;


//TODO Pas escaping toe in meerdere strings

//TODO Pas de volgende functies toe: strlen, strtr en beschrijf in comment wat er gebeurd

//TODO Gebruik een string als array; print het middelste karakter van een string,
//overschrijf deze en print nogmaals

//TODO Vergelijk strings met elkaar, met de == operator en de === operator

//TODO Vergelijk (sub)strings met elkaar met de volgende functies: strcmp, strcasecmp,
//substr_compare

//TODO Pas de volgende functies toe: strpos, strstr, stripos, stristr en beschrijf
// in comment wat er gebeurd.

//TODO Pas de volgende functies toe: strspn, strcspan, str_replace, substr_replace,
//str_irpleace, met zowel string als arrays. Beschrijf in comment wat er gebeurd.

//TODO Experimenteer met substrings extracting

//TODO Format strings voor meerdere talen, door de setlocale-method toe te passen

//TODO Format numbers voor meerdere talen met de number_format functie, en currency
//met de money_format functie

//TODO Pas de volgende functies toe: printf, sprintf, fprintf en beschrijf in comment wat er
//gebeurd

//TODO Parse formatted input door de volgende functie toe te passen: sscanf

//TODO Doorloop alle stappen op https://regexone.com/

//TODO Experimenteer nadat je de stappen hebt doorlopen op Regexone met de Perl
//Compatible Regular Expressions functies binnen PHP: preg_match, preg_match_all,
//preg_replace. Beschrijf wederom in comments wat er gebeurd.


?>
