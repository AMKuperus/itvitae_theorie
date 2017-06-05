<?php
/**
* This code represents the solutions for the theory assignments for ITVitea's PHP classes
**/
/*Opdrachten:
    #Pas de Standard Tag en Echo Tag toe
    #Experimenteer met de deprecated Short Tag, Script Tag en ASP Tags
    #Pas de 2 varianten van Single line comments, en de Multi-line comment toe
    #Experimenteer met de 4 scalar data-types en toon aan met de gettype-functie
    #welke data-type je gebruikt hebt
    #Experimenteer met type-casting voor elke data-type
    #Experimenteer met type-casting van array naar een object
    #Experimenteer met variable variablen
    #Pas CONSTANTS toe in een PHP-script
    #Experimenteer met var_dump, print_r en debug_zval_dump
    #Pas de isset() en empty() functies toe
    //TODO Experimenteer met de veelgebruikte operators: Assignment Operators, de 6
    Arithmetic Operators, String Operators, Comparison Operators (4 Equivalence
    Operators en 2 Inequality Operators) en Logical Operators
    //TODO Experimenteer met Bitwise Operators, Error Control Operators, Execution
    Operators, Incrementing/Decrementing Operators en Type Operators
    #Experimenteer met if-elseif-else statements, en nested if-else statements
    //TODO Experimenteer met de ternary operator en laat in een comment een vergelijkbare
    if/else statement zien
    #Experimenteer met een if/else-statement i.c.m. de isset() en empty() functies
    //TODO Experimenteer met switch-case statement (incl default)
    //TODO Experimenteer met while, do/while, for, for each en pas ook break en continue
    toe
    //TODO Pas in 2 verschillende bestanden de 2 manieren voor namespaces toe
    //TODO Pas in 1 bestand 2 verschillende namespaces toe
    //TODO Pas de namespaces toe in een bestand
    //TODO Experimenteer met sub-namespaces
    //TODO Experimenteer met namespaces: Dynamic Usage en Aliasing */
  echo "Standard tag<hr>\n"; //\n in between "" gives a new line in the code
?>

<?= 'Echotag<br>' . PHP_EOL; ?> <!--PHP_EOL means PHP_EndOfLine and specifies a end of line in the code-->

<% echo 'asptag'; %> Is removed from PHP since php7. I use php7.
<br>
<script language="php">
  echo "Script tag has also been removed since php7<br>";
</script>
<br>
<? echo "Short tag is not always enabled in apache config so does not work standard
          Also they do conflict with XML.\n";?>
<br>
<?php
  //Single line comment
  echo 'Single line comment with //<br>' . PHP_EOL;

  #other single line comment
  echo 'Other single line comment = #<br>' . PHP_EOL;

  /**
  *Multiline comment which stands out
  */
  echo 'Multiline comment that stands out from the rest with /* and * and */ over several lines.<br>' . PHP_EOL;

  /*
  echo "some kinda code";*/
  echo 'Other way to use multiline comment is /* and */<br>' . PHP_EOL;

  //Constant
  const CONSTANT = "NeverEverChangingString";
  echo CONSTANT;
  echo '<hr>' . PHP_EOL;

  //Create scalar datatypes boolean int float and string
  $boolean = TRUE;
  $int = 123;
  $float = 99.99;
  $string = "String";

  //If/else with is_bool() and strval()
  if(is_bool(strval($boolean))) {
    echo 'Is boolean<hr>' . PHP_EOL;
  } else {
    echo 'Is not boolean<hr>' . PHP_EOL;
  }

  //if/else with int_val() and floatval()
  if(is_int(floatval($int))) {
    $int++;
    echo 'Is a int: ' . $int . '<hr>' . PHP_EOL;
  } else {
    echo 'not a int<hr>' . PHP_EOL;
  }

  //if/else with is_float() and intval()
  if(is_float(intval($float))) {
    echo 'Is a float<hr>' . PHP_EOL;
  } else {
    echo 'not floating<hr>' . PHP_EOL;
  }

  //if/else with is_string() and boolval()
  if(is_string(boolval($string))) {
    $string = "Pretty";
    echo "$string .= is a string<hr>\n";
  } elseif(is_bool($string)) {
    echo 'Booooo<hr>' . PHP_EOL;
  } else {
    echo "Nothing at all";
  }

  echo '<hr>' . PHP_EOL;

  //array showing it in print_r() var_dump() and debu_zval_dump()
  $array[] = ['1' => 'een', 2 => 'twee', '3' => 'drie'];
  var_dump($array);
  echo '<hr>' . PHP_EOL;
  print_r($array);
  echo '<hr>' . PHP_EOL;
  debug_zval_dump($array);
  echo '<hr>' . PHP_EOL;

  //array to object cast and showing it in print_r() var_dump() and debu_zval_dump()
  $array2[] = (object) ['1' => 'een', 2 => 'twee', '3' => 'drie'];
  var_dump($array2);
  echo '<hr>' . PHP_EOL;
  print_r($array2);
  echo '<hr>' . PHP_EOL;
  debug_zval_dump($array2);

  echo '<hr>' . PHP_EOL;

  //If/else statement with isset()
  if(!isset($array)) {
    echo 'is not set' . PHP_EOL;
  } else {
    echo 'is set' . PHP_EOL;
  }

  echo '<hr>' . PHP_EOL;

  //If/else statement with empty()
  if(!empty($array)) {
    echo '!empty' . PHP_EOL;
  } else {
    echo 'empty' . PHP_EOL;
  }

?>
