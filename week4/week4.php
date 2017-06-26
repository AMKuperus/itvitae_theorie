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

$fruit2 = $fruits;

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
$different = array_diff($fruits, $fruit2);
echo 'array diff<pre>';
var_dump($different);
echo '</pre><hr>' . PHP_EOL;

//Vergelijk dezelfde 2 arrays met de array_diff_assoc, array_diff_key,
//array_diff_uasocc() en array_diff_ukey-functies en beschrijf
//het verschil onderling in commentaar.

//Use array_diff_assoc() to compare the same array with each orther
//Computes the difference of arrays with additional index check
$ada = array_diff_assoc($fruits, $fruit2);
echo 'array diff assoc<pre>';
var_dump($ada);
echo '</pre><hr>' . PHP_EOL;

//Computes the difference of arrays using keys for comparison
$adk = array_diff_key($fruits, $fruit2);
echo 'array diff key<pre>';
var_dump($adk);
echo '</pre><hr>' . PHP_EOL;

//Computes the difference of arrays with additional index check which is performed
//by a user supplied callback function
$adu = array_diff_uassoc($fruits, $fruit2, 'mySort');
echo 'array diff uasocc with  mySort function as callback<pre>';
var_dump($adu);
echo '</pre><hr>' . PHP_EOL;

//Computes the difference of arrays using a callback function on the keys for comparison
$aduk = array_diff_ukey($fruits, $fruit2, 'mySort');
echo 'array diff ukey with mySort function<pre>';
var_dump($aduk);
echo '</pre><hr>' . PHP_EOL;

//TODO Pas de ArrayObject-class toe, met name de append, asort, natsort methodes

//Use array_change_key_case() making all keys in $fruits uppercase
$fupp = array_change_key_case($fruit2, CASE_UPPER);
echo 'array change key case<pre>';
var_dump($fupp);
echo '</pre><hr>' . PHP_EOL;

//Use array_chunk() makes a multi-dimension array containing smaller arrays by
//given size
$chunk = array_chunk($fruit2, 3);
echo 'array chunk<pre>';
var_dump($chunk);
echo '</pre><hr>' . PHP_EOL;

//Use array_column() to extract all records matching column key
$cars = [ ['brand' => 'volvo',
            'type' => 'XC40',
            'color' => 'gunmetal blue'],
          ['brand' => 'opel',
            'type' => 'astra',
            'color' => 'red'],
          ['brand' => 'ford',
            'type' => 'mustang',
            'color' => 'black'],
          ['brand' => 'mitshubishu',
            'type' => 'EVO',
            'color' => 'silver']];
  $brands = array_column($cars, 'brand');
  echo 'array column<pre>';
  var_dump($brands);
  echo '</pre><hr>' . PHP_EOL;

//Use array_count_values() counting all the values of a array
echo '<pre>';
print_r(array_count_values($brands));
echo '</pre><hr>' . PHP_EOL;

//Use array_fill() to fill a array with values from starting index for given amount.
$fill = array_fill(2, 3, 'twee tot vier');
echo '<pre>';
var_dump($fill);
echo '</pre><hr>' . PHP_EOL;

//Use array_filter() giving back all the occurences that conatin a 'e'
//Function that checks if there is a 'e' in the string, returning the $var if true
function containsE($var) {
  if(strpos($var, 'e')) {
    return $var;
  }
}
echo '<pre>';
var_dump(array_filter($fruits, 'containsE'));
echo '</pre><hr>' . PHP_EOL;

//Use  array_flip() to flip key and value
echo '<pre>';
var_dump(array_flip($brands));
echo '</pre><hr>' . PHP_EOL;


//Use array_intersect() looking for values from $test in $fruits, returning a
//array with the results that occured in $test
$test = ['kiwi', 'b' => 'banana', 'orange', 'potato'];
$ai = array_intersect($fruits, $test);
echo '<pre>';
var_dump($ai);
echo '</pre><hr>' . PHP_EOL;

//Use array_intersect_assoc() looking for values from $test that match $fruit2
//on both key and value returning matches in $aia[]
$aia = array_intersect_assoc($fruit2, $test);
echo '<pre>';
var_dump($aia);
echo '</pre><hr>' . PHP_EOL;

//Use array_intersect_key() Computes the intersection of arrays using keys for
//comparison
$test = ['een' => 1, 'drie' => 3, 'tien', 10, 'vijf' => 5];
$a = ['een' => 1, 'vijf' => 3, 'tien' => 3];
$aik = array_intersect_key($a, $test);
echo '<pre>';
var_dump($aik);
echo '</pre><hr>' . PHP_EOL;

//TODO array_intersect_uassoc,
//TODO array_intersect_ukey,
//TODO array_uintersect_assoc,
//TODO array_uintersect_uassoc,
//TODO array_uintersect,
//TODO array_unique,
//TODO array_map,
//TODO array_merge_recursive,
//TODO array_multisort,
//TODO array_pad,
//TODO array_udiff_assoc,
//TODO array_udiff_uassoc,
//TODO array_udiff,

//Use array_product() to easily factorialize the contents of the array
$a = [5, 4, 3, 2, 1];
echo array_product($a);
echo '</pre><hr>' . PHP_EOL;

//Use array_rand(), returns a 'random' key from given array
echo $fruits[array_rand($fruits)];
echo '<hr>' . PHP_EOL;

//array_reduce() Iteratively reduce the array to a single value using a
//callback function

//Function to count the sum off tha array as callback method for array_reduce()
function sum($carry, $item) {
  $carry += $item;
  return $carry;
}

//Function to multiply as callback for array_reduce()
function multiply($carry, $item) {
  $carry *= $item;
  return $carry;
}

$a = [256, 128, 64];
echo '<pre>';
var_dump(array_reduce($a, 'sum'));
echo '</pre><hr>' . PHP_EOL;
//When using multiply as third parameter use initial value of 1 (can't multiply 0)
echo '<pre>';
var_dump(array_reduce($a, 'multiply', 1));
echo '</pre><hr>' . PHP_EOL;


//Use array_replace() to alter a array with given other array, on index=>value
//Creates results in a new array $all[]
$replace = [0 => 'donkervoort', 3 => 'ferrari', 4 => 'lexus'];
$all = array_replace($brands, $replace);
echo '<pre>';
var_dump($all);
echo '</pre><hr>' . PHP_EOL;

//Use array_replace_recursive() Replaces elements from passed arrays into the
//first array recursively
$replace = [0 => 'donkervoort', 'france' => ['renault', 'citroen']];
$allr = array_replace_recursive($brands, $replace);
echo '<pre>';
var_dump($allr);
echo '</pre><hr>' . PHP_EOL;

//Use array_reverse() to reverse all the elements in the array
echo '<pre>';
var_dump(array_reverse($brands));
echo '</pre><hr>' . PHP_EOL;

//Use array_search() Looks for the needle (searchterm) in the haystack (array)
$key = array_search('kiwi', $fruit2);
echo $fruit2[$key] . '<hr>' . PHP_EOL;

//Use array_splice() remove a portion of the array and replace it with something
//else
echo '<pre>';
var_dump(Array_splice($brands, 1));
echo '</pre><hr>' . PHP_EOL;

//Use array_sum() to return the sum of the array
echo array_sum($a) . '<hr>' . PHP_EOL;

//Use compact() create a array containing variables and their values. Works recursivly
$animal = 'cat';
$color = 'black';
$legs = 4;
$likes = ['sleeping', 'eating', 'playing with a ball'];
$compact = compact('animal', 'color', 'legs', 'likes');
echo '<pre>';
var_dump($compact);
echo '</pre><hr>' . PHP_EOL;

//Use current() shows current active element from the array
echo current($compact) . '<hr>' . PHP_EOL;

//Use each,Warning This function has been DEPRECATED as of PHP 7.2.0.
//Relying on this function is highly discouraged.
$each = each($fruit2);
echo '<pre>';
var_dump($each);
echo '</pre><hr>' . PHP_EOL;

//end() sets the pointer of an array to the last element
echo '<pre>';
end($compact);
var_dump(current($compact));
echo '</pre><hr>' . PHP_EOL;

//extract() Import variables into the current symbol table from an array,
//returns the number of variables succesfully imported into the symbol table
$keyboard = ['type' => 'qwerty', 'tech' => 'mechanical'];
extract($keyboard);
echo "| $type | $tech |<hr>";

//key() fetch a key from a array, returns the index of the current position of
//the array
echo key($fruit2) . '<hr>' . PHP_EOL;

//prev() rewind the internal array pointer
prev($fruit2);
echo current($fruit2) . '<hr>' . PHP_EOL;

//next() points the array internal pointer to the next
next($fruit2);
//pos() alias for current
echo pos($fruit2) . '<hr>' . PHP_EOL;
?>
