<?php
//Maak een indexed array met numerieke keys met de array functie
$array = array(1, 2, 3);
var_dump($array);
echo '<hr>' . PHP_EOL;

//Maak een associatieve array met alfanumerieke keys met de array operator
$assocarray = array(1 => 'een', 'A' => 'a', 3 => 'drie');
var_dump($assocarray);
echo '<hr>' . PHP_EOL;

//Maak 1 array zonder keys met de short array syntax
$short = [1, 2, 3];
var_dump($short);
echo '<hr>' . PHP_EOL;

//Maak een multidimensionale array (dus een array in een array)
$multi = ['A' => ['1' => 'een', '2', 'twee'], 'B' => ['3' => 'drie', '4' =>'vier']];
var_dump($multi);
echo '<hr>' . PHP_EOL;

//Pas de var_dump methode toe op bovenstaande arrays

//Pas de range functie toe om een array te maken binnen bepaald bereik
$range = range('a', 'z');
var_dump($range);
echo '<hr>' . PHP_EOL;

//Pas de array_slice functie toe om een array op te splitsen
$slice = array_slice($range, 23);
var_dump($slice);
echo '<hr>' . PHP_EOL;

//Voeg waarden aan een array toe met behulp van array_push & array_unshift
//Adding 'push' to $shift[] at the end with array_push()
array_push($slice, 'push');
var_dump($slice);
echo '<hr>' . PHP_EOL;

//Adding 'shift' to the beginning of $slice[] with array_unshift()
array_unshift($slice, 'shift');
var_dump($slice);
echo '<hr>' . PHP_EOL;

//Haal waarden uit een array met behulp van array_pop en array_shift
//Removing 'push' from $slice[] with array_pop()
array_pop($slice);
var_dump($slice);
echo '<hr>' . PHP_EOL;

//Removing 'shift' from beginning of $shift[] with array_shift()
array_shift($slice);
var_dump($slice);
echo '<hr>' . PHP_EOL;

//Pas de count functie toe om het aantal elementen van een array te tellen.
echo count($slice);
echo '<hr>' . PHP_EOL;

//Loop door arrays heen met for, foreach met values, foreach met key & values
$fruits = ['a' => 'apple',
            'b' => 'banana',
            'c' => 'cherry',
            'd' => 'durian',
            'e' => 'elderberries',
            'f' => 'figs',
            'g' => 'grapes',
            'h' => 'honeydew melon',
            'i' => NULL,
            'j' => 'jackfruit',
            'k' => 'kiwi',
            'l' => 'lemon',
            'm' => 'mango',
            'n' => 'nectarine',
            'o' => 'orange',
            'p' => 'pear',
            'q' => 'quince',
            'r' => 'raspberry',
            's' => 'strawberry',
            't' => 'tangerine',
            'u' => NULL,
            'v' => NULL,
            'w' => 'watermelon',
            'x' => NULL,
            'y' => NULL,
            'z' => NULL];
//Array with for
$c = count($slice);
for($i = 0; $i < $c; $i++) {
  echo $slice[$i];
}
echo '<hr>' . PHP_EOL;

//Array with foreach
foreach($slice as $s) {
  echo $s;
}
echo '<hr>' . PHP_EOL;

//Array with foreach and key and value
foreach($fruits as $k => $v) {
  if (!isset($v)) {
    echo 'Letter <strong>' . strtoupper($k) . '</strong> can not be found.<br>' . PHP_EOL;
  } else {
    echo 'Fruit: ' . $v . '<br>' . PHP_EOL;
  }
}
echo '<hr>' . PHP_EOL;

//Loop door arrays heen met de array_walk functie en pas een callback functie
//toe om waarden aan te passen
//Function for the calback on array_walk()
function fruitify($value, $key) {
  if(isset($value)) {
    echo strtoupper($key) . ' is for <strong>' . $value . '</strong><br>' . PHP_EOL;
  } else {
    echo 'There is no fruit starting with a ' . strtoupper($key) . '<br>' . PHP_EOL;
  }
}
//Calling array_walk() with fruitify()
array_walk($fruits, 'fruitify');
echo '<hr>' . PHP_EOL;

//Controleer of een key in een array bestaat met behulp van de array_key_exists
//functie
$find = 's';
if(array_key_exists($find, $fruits)) {
  echo $fruits[$find];
} else {
  echo 'Not found <br>' . PHP_EOL;
}
echo '<hr>' . PHP_EOL;

//Controleer of een element in een array bestaat met behulp van de in_array functie
$find = 'merenge';
if(in_array($find, $fruits)) {
  echo 'Fruit ' . $find . ' found! <br>' . PHP_EOL;
} else {
  echo $find . ' does not exist <br>' . PHP_EOL;
}
echo '<hr>' . PHP_EOL;

//Haal alle keys op van een array met behulp van de array_keys functie
$keys = array_keys($fruits);
var_dump($keys);
echo '<hr>' . PHP_EOL;

//Haal alle waarden op van een array met behulp van de array_values functie
$values = array_values($fruits);
var_dump($values);
echo '<hr>' . PHP_EOL;

//Sorteer een array met behulp van de sort-functie en pas de 4 verschillende
//methodes toe: SORT_LOCALE_STRING, SORT_NUMERIC, SORT_REGULAR, SORT_STRING
//en beschrijf in commentaar wat het verschil is.

//Use sort() with SORT_LOCALE_STRING which sorts by comparing the strings and
//then sorts the array based on the current locale
sort($fruits, SORT_LOCALE_STRING);
echo 'SORT_LOCALE_STRING<pre>';
var_dump($fruits);
echo '</pre>';
echo '<hr>' . PHP_EOL;

//Use sort() with SORT_NUMERIC which sorts the array numerically
sort($fruits, SORT_NUMERIC);
echo 'SORT_NUMERIC<pre>';
var_dump($fruits);
echo '</pre>';
echo '<hr>' . PHP_EOL;

//Use sort with SORT_REGULAR which compares items normally and sorts them without
//changing types.
sort($fruits, SORT_REGULAR);
echo 'SORT_REGULAR<pre>';
var_dump($fruits);
echo '</pre>';
echo '<hr>' . PHP_EOL;

//Use sort() with SORT_STRING which compares everything as a string and then
//sorts the array based on these values
sort($fruits, SORT_STRING);
echo 'SORT_STRING<pre>';
var_dump($fruits);
echo '</pre>';
echo '<hr>' . PHP_EOL;

//Sorteer een array met behulp van de overige functies: rsort, asort, arsort,
//ksort, krsort, usort, natsort en beschrijf in commentaar wat het verschil is.

//Use rsort() which sorts the array in reverse order
rsort($fruits);
echo 'rsort<pre>';
var_dump($fruits);
echo '</pre><hr>' . PHP_EOL;

//Use asort() which sorts the array and maintains the index position
asort($fruits);
echo 'asort<pre>';
var_dump($fruits);
echo '</pre><hr>' . PHP_EOL;

//Use arsort() which sorts in reverse order and mainaints the index.
arsort($fruits);
echo 'arsort<pre>';
var_dump($fruits);
echo '</pre><hr>' . PHP_EOL;

//Use ksort() sorting a array by key
ksort($fruits);
echo 'ksort<pre>';
var_dump($fruits);
echo '</pre><hr>' . PHP_EOL;

//Use krsort() which sorts an array by key in reverse order
krsort($fruits);
echo 'krsort<pre>';
var_dump($fruits);
echo '</pre><hr>' . PHP_EOL;

//Use usort() which sort a array by value by using a function that says what to sort by
function mySort($a,$b) {
  if ($a==$b) return 0;
  return ($a<$b)?-1:1;
}

usort($fruits, 'mySort');
echo 'usort<pre>';
var_dump($fruits);
echo '</pre><hr>' . PHP_EOL;

//Use natsort() which sorts an array usiong a natural algorithm
natsort($fruits);
echo 'natsort<pre>';
var_dump($fruits);
echo '</pre><hr>' . PHP_EOL;

//Voeg 2 arrays samen met de array_merge functie
$merged = array_merge($fruits, $range);
echo 'array merge<pre>';
var_dump($merged);
echo '</pre><hr>' . PHP_EOL;

//Vergelijk 2 arrays met de array_diff functie
//Compares $fruits against $range and returns the values in $fruits that are not
//present in the other array.
$different = array_diff($fruits, $range);
echo 'array diff<pre>';
var_dump($different);
echo '</pre><hr>' . PHP_EOL;

//TODO Vergelijk dezelfde 2 arrays met de array_diff_assoc, array_diff_key,
//array_diff_uasocc() array_diff_ukey en array_diff_ukey-functies en beschrijf
//het verschil onderling in commentaar.

//TODO Pas de ArrayObject-class toe, met name de append, asort, natsort methodes

//TODO array_change_key_case,
//TODO array_chunk,
//TODO array_column,
//TODO array_count_values,
//TODO array_fill,
//TODO array_filter,
//TODO array_flip,
//TODO array_intersect_assoc,
//TODO array_intersect_key,
//TODO array_intersect_uassoc,
//TODO array_intersect_ukey,
//TODO array_intersect,
//TODO array_map,
//TODO array_merge_recursive,
//TODO array_multisort,
//TODO array_pad,
//TODO array_product,
//TODO array_rand,
//TODO array_reduce,
//TODO array_replace,
//TODO array_replace_recursive,
//TODO array_reverse,
//TODO array_search,
//TODO array_slice,
//TODO array_splice,
//TODO array_sum,
//TODO array_udiff_assoc,
//TODO array_udiff_uassoc,
//TODO array_udiff,
//TODO array_uintersect_assoc,
//TODO array_uintersect_uassoc,
//TODO array_uintersect,
//TODO array_unique,
//TODO array_values,
//TODO compact,
//TODO current,
//TODO each,
//TODO end,
//TODO extract,
//TODO key,
//TODO next,
//TODO pos,
//TODO prev,
//TODO range
?>
