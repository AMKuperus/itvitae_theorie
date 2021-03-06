<?php

//Experimenteer met strings en pas single & double quotes toe
//Experimenteer met string met variables met zowel single en double quotes
//Pas naast \n nog meer control characters toe
//Pas escaping toe in meerdere strings
$var = 'Variable';
//Single quotes example
echo 'This is a string with \'single quotes\' where we have to concatenate ' . $var .
      ' with  closing the \' \' and useing a .<br>' . PHP_EOL;
//Double quotes example
echo "In a string\040made with double \"\" you can use $var directly inside the \"quotes\".<br>\n";

//Pas Heredoc en Nowdoc toe in een bestand
//Heredoc example
$heredoc = <<<OCTOCAT
<pre>$var
....................................................................................................
...-------------::::::::::::::::-----------:::::::::::::::::::::::::::::::::::::::::::::::::::::-...
.../+++++++++++ommmmmmmmmmmmmmmmmhssyhhddmmmmmmmmmmmmmmmmmmmddddhhhdmmmmmmmmmmmmmmmmmhyyyyyyyyyy+...
.../+++++++++++smmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmhyyyyyyyyyy+...
.../+++++++++++ymmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmdyyyyyyyyyy+...
.../+++++++++++smmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmhyyyyyyyyyy+...
.../+++++++++++ommmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmyyyyyyyyyyy+...
.../++++++++++++ymmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmdyyyyyyyyyyy+...
.../++++++++++osdmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmhyyyyyyyyyy+...
.../+++++++++ohmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmdyyyyyyyyy+...
.../++++++++ohmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmdyyyyyyyy+...
.../+++++++ohmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmdyyyyyyy+...
.../+++++++ymmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmdyyyyyy+...
.../++++++ommmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmhyyyyy+...
.../++++++ymmmmmmmmmmmmmmmmmmmmmmmddddddddddmmmmmmmmmmmmmmmmmddddddddddmmmmmmmmmmmmmmmmmmmdyyyyy+...
.../++++++hmmmmmmmmmmmmmmmmmmdhyso++////////++++oooooooooo+++////:::/osyyhhddmmmmmmmmmmmmmdyyyyy+...
.../++++++hmmmmmmmmmmmmmmmmhs+/-......................................-/syyyyhdmmmmmmmmmmmmyyyyy+...
.../++++++hmmmmmmmmmmmmmmdy+:-..:+/:--...........................-++/:---oyyyyyhmmmmmmmmmmdyyyyy+...
.../++++++ymmmmmmmmmmmmmhs/-..-s+-.-:/-.........................+o-..:/:--oyyyyyhmmmmmmmmmdyyyyy+...
.../++++++ymmmmmmmmmmmmds/-...y:..odmmmy:......................oo../hmmmh+-syyyyyhmmmmmmmmdyyyyy+...
.../++++++ommmmmmmmmmmmy+-...+o..ommmmmmd-....................-y..:mmmmmmm+:yyyyyydmmmmmmmhyyyyy+...
.../+++++++dmmmmmmmmmmdy+-...s:..dmmmmmmmo..................../o..ommmmmmmh.hyyyyyhmmmmmmmyyyyyy+...
.../+++++++smmmmmmmmmmmy+:...o:..hmmmmmmm+....................:o..+mmmmmmmy.hyyyyyhmmmmmmhyyyyyy+...
...+ssssssssdmmmmmmmmmmyo-...-o..:dmmmmmy......................s...ymmmmmd::hyyyyydmmmmmmhhhhhhho...
.../+oooooooodmmmmmmmmmds:..../:..-ohhy+.......................-+...+yhho--yyyyyyymmmmmmyyyyyyyy+...
...+ssssssssssdmmmmmmmmmho-....--..................+ys-..........:......./yyyyyyydmmmmmhhhhhhhhho...
.../++++++++++ohmmmmmmmmmho:.......................odh:............-:/+oyyyyyyyydmmmmdyyyyyyyyyy+...
.../+++++++++++oshmmmmmmmmdy+:-..................:.....:-.........-+syyyyyyyyyhmmmmdhyyyyyyyyyyy+...
.../+++++++++++++oshmmmmmmmmdhs+/:-..............+y/::oh:......:/oyyyyyyyyyhhmmmmdhyyyyyyyyyyyyy+...
.../+++++++++++++++ooyhdmmmmmmmdhhyso++/::---.....-/++/---:/+osyyyyyyyyhhdmmmmdhyyyyyyyyyyyyyyyy+...
.../++++ooo+++++++++++oosyhdmmmmmmmmdddhhhhyyyssssssssssyyyyhhhhhhdddmmmmmdhhyyyyyyyyyyyyyyyyyyy+...
.../+++yddshhsso++++++++++ooosyyhdddmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmdddhhyyyyyyyyyyyyyyyyyyyyyyyy+...
.../+++oyhdmhhmdho++++++++++++++oooooydmmmmmmmhsyhdhyshmmmmmmmmhyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy+...
.../+++++oohmmmmmds++++++++++++++++oymmmmmmmmmdo-/yo-oddyyyyhmmmdyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy+...
.../+++++++ohmmmmmdyo+++++++++++++ohmmmmmmmmmmmmy/ysymmysddysmmmmdyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy+...
.../++++++++osdmmmmmhso+++++++++++smmmmmmmmmmmmmmdhmmmmdsyysymmmmmhyyyyyyyyyyyyyyyyyyyyyyyyyyyyy+...
.../sssssssssssmmmmmmmdhysssssssyhdmmmmmmmmmmmmmmmmmmmmmmddmmmmmmmdhhhhhhhhhhhhhhhhhhhhhhhhhhhhho...
...smmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmms...
...smmyyhmmhyymhyyyyyhmmhysyhdmmmmmhyhmmyydmdyyddyyyyyymmmmmmdyyyydmmmhyyyhdmmyyyyhhmmmdyyyyyymms...
...smmy+odmo+smy++oooymyooso+odmmmmy+ommo+ymh+odh++ooosmmmmmho+so+odmyooso+smmo+oooosdmh++ooosmms...
...smmdo+yh+odmy++dmmmmo+smhoohmmmmh+odd++sms+omh++ymmmmmmmms+omd++ymo+smy++hmo+omh++ymh++hmmmmms...
...smmmy+oo+smmy++dmmmms+ohmdmmmmmmdo+hy++omo+ymh++hmmmmmmmmo+ommsshm++smy++hmo+omd++smh++hmmmmms...
...smmmdo++odmmy++syhmmmsooymmmmmmmmo+ys+o+ho+hmh++syymmmmmmo+ommmmmm++smy++hmo+omm++smh++syymmms...
...smmmmy++smmmy++ooymmmmyo+sdmmmmmmy+ooos+s+ommh++ooommmmmmo+ommmmmm++smy++hmo+omm++smh++oosmmms...
...smmmmh++hmmmy++dmmmmmmmho+ommmmmmh+++sh+++smmh++ymmmmmmmmo+ommhhdm++smy++hmo+omd++smh++hmmmmms...
...smmmmh++hmmmy++dmmmdsshmh++hmmmmmmo++ymo++ymmh++hmmmmmmmmo+omm++ym++smy++hmo+omd++smh++hmmmmms...
...smmmmh++hmmmy++yyyhdo+sdy+ohmmmmmms++dms++dmmh++syyymmmmms+ohy+ohmo+ohs+odmo+oys+ohmh++syyhmms...
...smmmmhoohmmmyooooosmhoooooymmmmmmmyoommhoommmhoooooommmmmdsooooymmdsoooohmmoooooshmmhoooooomms...
...smmmmmmmmmmmmmmmmmmmmmdddmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmddmmmmmmdddmmmmmmmmmmmmmmmmmmmmmms...
...-::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-...
....................................................................................................
</pre>
OCTOCAT;

echo $heredoc;

//Nowdoc example
$nowdoc = <<<'NOW'
<hr>Now $var is like that in nowdoc<br>\n.<hr>
NOW;

echo $nowdoc;

//Pas de volgende functies toe: strlen, strtr en beschrijf in comment wat er gebeurd
//Measuring the string length for $heredoc
echo 'Length of the ascii octocat image: ' . strlen($heredoc);

//Altering the $heredoc ascii image replacing m o and y with + = and *
$newCat = strtr($heredoc, 'moy', '+=*');
echo $newCat . '<br>' . PHP_EOL;

//Gebruik een string als array; print het middelste karakter van een string,
//overschrijf deze en print nogmaals
$string = "QWERTY";
echo $string[3] . '<br>' . PHP_EOL;
//Changing the 3th position to a small r
$string[3] = 'r';
echo $string . '<br>' . PHP_EOL;

//Vergelijk strings met elkaar, met de == operator en de === operator
//Using the == to compare a string with a int
if('1' == 1) {
  echo 'Cause of the use off == the operator finds this 1 and "1" are equal<br>' . PHP_EOL;
} else {
  //won't get here
  echo 'meh<br>' . PHP_EOL;
}

//Using the === to compare a string with a int
if('2' === 2) {
  //won't get here
  echo "meh<br>\n";
} else {
  echo 'Now it sees the difference between a int and a string cause we used === <br>' . PHP_EOL;
}

//Vergelijk (sub)strings met elkaar met de volgende functies: strcmp, strcasecmp,
//substr_compare
//Create 2 strings with the difference being capital and normal letters
$string1 = 'QWERTY';
$string2 = 'qwerty';
//Compare strings with strcmp() which is case sensitive
if (strcmp($string1, $string2) !== 0) {
  //Outputs this
  echo 'Not equal <br>' . PHP_EOL;
} else {
  echo 'equal <br>' . PHP_EOL;
}

//Compare strings with strcasecmp() which doesnt look at capitals
if (strcasecmp($string1, $string2) !== 0) {
  echo 'Not equal <br>' . PHP_EOL;
} else {
  //This should be the output know
  echo 'Equal <br>' . PHP_EOL;
}

//Compare with substr_compare() comparing from second letter and then 3 positions
if (substr_compare($string1, 'WERTY', 1, 3) !== 0) {
  echo 'Not equal <br>' . PHP_EOL;
} else {
  echo 'equal <br>' . PHP_EOL;
}

//Pas de volgende functies toe: strpos, strstr, stripos, stristr en beschrijf
// in comment wat er gebeurd.
$haystack = 'Just a useless meaningless string.';
$needle = "n";

//Call strpos() on $haystack looking for the needle.
echo strpos($haystack, $needle) . '<br>' . PHP_EOL;

//Call strstr() on $haystack with $needle to find first occurance of $needle and
//return the part starting from it's first occurance.
echo strstr($haystack, $needle) . '<br>' . PHP_EOL;

//Call stripos() finding needle without caring for capitals
echo stripos($haystack, 'N') . '<br>' . PHP_EOL;

//Call stristrt() on $haystack looking for needle where given needle is a capital
//Since stristr() does not care for capitals it will give the same result as before
echo stristr($haystack, 'N') . '<br>' . PHP_EOL;

//Pas de volgende functies toe: strspn, strcspn, str_replace, substr_replace,
//str_irpleace met string. Beschrijf in comment wat er gebeurd.
$example = "qwerty09876";
$mask = "qw";

//Call strspn() on $example finding length segments matching mask.
echo strspn($example, $mask) . '<br>' . PHP_EOL;

//Call strcspn() finding length initial segment that does not match.
echo strcspn($example, '09') . '<br>' . PHP_EOL;

//Call str_replace() on $example, case sensitive, replaces the part that matches
//$mask in $example
echo str_replace('qw', '#@', $example) . '<br>' . PHP_EOL;

//Call str_ireplace()  on $example, case insensitive, replaces the part that
//matches $mask in example
echo str_ireplace('Qw', '*&', $example) . '<br>' . PHP_EOL;

//Call substr_replace
echo substr_replace($example, 'replace', 3) . '<br>' . PHP_EOL;

//Experimenteer met substrings extracting
//Call substr() on example taking out the a part containing 'ty';
$ty = substr($example, 4, 2);
echo $ty . '<br>' . PHP_EOL;

//Format strings voor meerdere talen, door de setlocale-method toe te passen
setlocale(LC_ALL, 'nl_NL');
//Set timezone for europe/amsterdam
date_default_timezone_set('Europe/Amsterdam');
//Show time %k = hours (0-23h) %M = minutes %A = day %e = date(day) %b = month %Y = year
echo strftime("%k:%M %A %e %b %Y") . '<br>' . PHP_EOL;

//Format numbers voor meerdere talen met de number_format functie, en currency
//met de money_format functie
echo number_format("388374.484", 3, ",", ".") . '<br>' . PHP_EOL;
echo money_format('%.2n', '393837.038') . '<br>' . PHP_EOL;

//Pas de volgende functies toe: printf, sprintf, fprintf en beschrijf in comment wat er
//gebeurd
//Call printf() where we put string $cat inside the string in printf() which then
//prints out the complete thing
$cat = 'cat\'s are the best';
$best = printf('It is a simple fact that %s !', $cat);
echo $best . '<br>' . PHP_EOL;

//Call sprintf() on a int with %b returning a binary representaton
$bin = sprintf('%b', 13);
echo $bin . '<br>' . PHP_EOL;

//Call sprintf() on 13 with %X returning a hexadecimal representation of 13
$hex = sprintf('%X', 13);
echo $hex . '<br>' . PHP_EOL;

//Use fprintf() creating a stream and writing to the stream
if (!($file = fopen('test.txt', 'w'))) {
  return;
}
//Print to the file
fprintf($file, 'It is a simple fact that %s ! \n %s', $cat, $heredoc);

//Parse formatted input door de volgende functie toe te passen: sscanf
$ss = 'My favorit cat';
//Use sscanf() on $ss and the call $as[2] printing cat
$as = sscanf($ss, '%s %s %s');
echo $as[2] . '<br>' . PHP_EOL;

//Experimenteer nadat je de stappen hebt doorlopen op Regexone met de Perl
//Compatible Regular Expressions functies binnen PHP: preg_match, preg_match_all,
//preg_replace. Beschrijf wederom in comments wat er gebeurd.

//Use preg_match() to test if a string contains digits capitals and normal letters
//Everything between () is treathed as a group, then ?=.* means "if there is atleast one somewhere"
//because it is grouped. The [A-Z] looks for capitals [a-z] for small letters and \d for digits (0-9)
if (preg_match('/(?=.*[A-Z])(?=.*[a-z])(?=.*\d)/', '2abj6876KK')) {
  echo 'MATCH' . '<br>' . PHP_EOL;
} else {
  echo 'NO MATCH' . '<br>' . PHP_EOL;
}

//Use preg_match_all() to check if given string is a dutch postcode
if (preg_match('/^(?P<digits>\d{4})(?P<text>[a-zA-Z]{2}$)/', '1234Aa', $matches)) {
  echo 'MATCH' . '<br>' . PHP_EOL;
} else {
  echo 'NO MATCH' . '<br>' . PHP_EOL;
}

//Show result
echo '[' . $matches['digits'] . strtoupper($matches['text']) . ']' . '<br>' . PHP_EOL;

//Use preg_replace() to echo a correct string
$badstring = 'A dog is cute.';
echo preg_replace('/dog/', 'cat', $badstring);

?>
