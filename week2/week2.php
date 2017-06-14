<?php
/*
//Maak een functie zonder argumenten en pas de functie toe, beschrijf in commentaar
wat je doet
//Maak een functie aan met argumenten en pas de functie toe, beschrijf in
commentaar wat je doet
//Maak een functie aan met een return value en pas de functie toe, beschrijf in
commentaar wat je doet
//Experimenteer met variable scope: Variabelen buiten en binnen een functie, pas ook
global toe en de $GLOBALS array, beschrijf in commentaar wat je doet
//Maak een functie waarbij je parameters uitleest door middel van func_num_args en
func_get_arg, beschrijf in commentaar wat je doet
//Maak gebruik van Scalar type declarations in een functies, en pas de functie toe.
Beschrijf in commentaar wat er gebeurd.
//Maak gebruik van Return type declarations bij een functie, en pas de functie ook toe.
Beschrijf in commentaar wat er gebeurd.
//Pas 'passing by reference' toe bij een functie. Beschrijf in commentaar wat er
gebeurd.
//Pas een functie toe met variadics. Beschrijf in commentaar wat er gebeurd.
//Pas een functie toe met argument unpacking. Beschrijf in commentaar wat er
gebeurd.*/

//Function that returns "Hello!"
function hello() {
  return "Hello!";
}

//call function hello() in a echo so it prints echo on screen
echo hello() . '<br>' . PHP_EOL;

//Function helloVisitor says hello to $person
//@param $person is person to say hello to in function.
//Setting argument default as "ANONYMOUS"
function helloVisitor($person = "ANONYMOUS") {
  return "Hello $person welcome!";
}

//Call function helloVisitor with a name for person being "Marley"
echo helloVisitor("Marley") . '<br>' . PHP_EOL;

//Call function helloVisitor that is anonymous
echo 'ANONYMOUS CALL: ' . helloVisitor() . '<br>' . PHP_EOL;

//Declaring a variable $a in global scope
$a = "inside";

//Accesing $a inside a function
function accesA() {
  //Accesing $a by use of global
  global $a;
  return $a;
}

echo accesA() . '<br>' . PHP_EOL;

//Using $a from $GLOBALS with $GLOBALS[a] calls $a from the $GLOBALS array[]
function grantAccesA() {
  return 'Grant Global: ' . $GLOBALS['a'];
}

echo grantAccesA() . '<br>' . PHP_EOL;
;

//Using $a inside it's own scope instead of $a in global scope
function insideA() {
  //Create $a inside the functions scope to reurn it on function call.
  $a = "I am inside the funtion A.";
  return $a;
}

echo insideA() . '<br>' . PHP_EOL;

//Using func_num_args() and func_get_args() returning either string with number
//of arguments or string that there is no arguments given.
function getArgs() {
  $args = func_num_args();
  if($args > 0) {
    //If there is arguments also give the arguments number and the arguments back
    $argArray = func_get_args();
    foreach ($argArray as $a) {
      echo "Argument: $a <br>\n";
    }
    return "There are $args arguments";
  } else {
    return "There is no arguments";
  }
}

//give 2 arguments
echo getArgs("arg", "bah") . '<br>' . PHP_EOL;

//give 0 arguments
echo getArgs() . '<br>' . PHP_EOL;

//Use scalar data type declaraion in function
function scalar(array $array = null) {
  $i = 0;
  foreach($array as $a) {
    echo $i . '. ' . $a . '<br>' . PHP_EOL;
    $i++;
  }
}

//create a array to test
$testArray = ['test', 'array', 'testing', 'scalar', 'data', 'types'];
//Call function scalar with array
scalar($testArray);
//Call function scalar without array, giving a fatal error cause its not a array.
#scalar("what");

//Return type declaration giving back a string while given a int
function returnString(): string {
  return 1;
}

echo returnString() . '<br>' . PHP_EOL;
//Test if the type declaration worked
echo gettype(returnString()) . '<br>' . PHP_EOL;

//Passing by reference
$ref = "boo";
//Pass variable by reference
function pasRef(&$reference) {
  //change variable $reference to "scare" and return it
  //Cause the variable gets passed by reference it can change a external variable
  $reference = "scare";
}
//Call original
echo $ref . '<br>' . PHP_EOL;
//Call pasRef()
pasRef($ref);
echo $ref . '<br>' . PHP_EOL;

//Variadics test, scatter, ...$vari being the variadic that will absorb all given
//variables after $var, and is accesible as a array[]
function varIdecs($var, ...$vari) {
  $string = "$var";
  //Looping trough all $vari with foreach concatenating the string $string
  foreach ($vari as $v) {
    $string .= ' ' . $v;
  }
  return $string;
}

//use varIdecs passing 7 variables
echo varIdecs("test", "this", "variatics", 'passing', 'all', "this", 'vars') . '<br>' . PHP_EOL;

//Argument unpacking or splat
$unpack = ['string', 'STRING', 'When we unpack this string the context will change'];
echo str_replace(...$unpack);

?>
