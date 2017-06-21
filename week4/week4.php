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

//TODO Sorteer een array met behulp van de sort-functie en pas de 4 verschillende
//methodes toe: SORT_LOCALE_STRING, SORT_NUMERIC, SORT_REGULAR, SORT_STRING
//en beschrijf in commentaar wat het verschil is.

//TODO Sorteer een array met behulp van de overige functies: rsort, asort, arsort,
//ksort, krsort, usort, natsort en beschrijf in commentaar wat het verschil is.

//TODO Voeg 2 arrays samen met de array_merge functie

//TODO Vergelijk 2 arrays met de array_diff functie

//TODO Vergelijk dezelfde 2 arrays met de array_diff_assoc, array_diff_key,
//array_diff_uasocc() en array_diff_ukey-functies en beschrijf het verschil
//onderling in commentaar.

//TODO Pas de ArrayObject-class toe, met name de append, asort, natsort methodes

//TODO Controleer of je alle onderstaande Array-functies (uit Appendix A:
//Array Functions) hebt toegepast. Experimenteer met de functies die je nog niet
//hebt toegepast.  array_change_key_case, array_chunk, array_column, array_count_values,
//array_diff_assoc, array_diff_key, array_diff_uassoc, array_diff_ukey, array_diff,
//array_fill, array_filter, array_flip, array_intersect_assoc, array_intersect_key,
//array_intersect_uassoc, array_intersect_ukey, array_intersect, array_key_exists,
//array_keys, array_map, array_merge, array_merge_recursive, array_multisort,
//array_pad, array_product, array_rand, array_reduce, array_replace,
//array_replace_recursive, array_reverse, array_search, array_slice, array_splice,
//array_sum, array_udiff_assoc, array_udiff_uassoc, array_udiff, array_uintersect_assoc,
//array_uintersect_uassoc, array_uintersect, array_unique, array_values, array_walk,
//compact, count/sizeof, current, each, end, extract, in_array, key, next, pos, prev, range
?>
