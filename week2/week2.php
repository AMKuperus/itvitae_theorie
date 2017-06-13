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
//TODO Maak een functie waarbij je parameters uitleest door middel van func_num_args en
func_get_arg, beschrijf in commentaar wat je doet
//TODO Maak gebruik van Scalar type declarations in een functies, en pas de functie toe.
Beschrijf in commentaar wat er gebeurd.
//TODO Maak gebruik van Return type declarations bij een functie, en pas de functie ook toe.
Beschrijf in commentaar wat er gebeurd.
//TODO Pas 'passing by reference' toe bij een functie. Beschrijf in commentaar wat er
gebeurd.
//TODO Pas een functie toe met variadics. Beschrijf in commentaar wat er gebeurd.
//TODO Pas een functie toe met argument unpacking. Beschrijf in commentaar wat er
gebeurd.*/

//Function that returns "Hello!"
function hello() {
  return "Hello!";
}

//call function hello() in a echo so it prints echo on screen
echo hello() . '<br>' . PHP_EOL;

//Function helloVisitor says hello to $person
//@param $person is person to say hello to in function.
function helloVisitor($person) {
  return "Hello $person welcome!";
}

//Call function helloVisitor with a name for person being "Marley"
echo helloVisitor("Marley") . '<br>' . PHP_EOL;

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

?>
