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
    #Experimenteer met de veelgebruikte operators: Assignment Operators, de 6
    Arithmetic Operators, String Operators, Comparison Operators (4 Equivalence
    Operators en 2 Inequality Operators) en Logical Operators
    #Experimenteer met Bitwise Operators, Error Control Operators, Execution
    Operators, Incrementing/Decrementing Operators en Type Operators
    #Experimenteer met if-elseif-else statements, en nested if-else statements
    #Experimenteer met de ternary operator en laat in een comment een vergelijkbare
    if/else statement zien
    #Experimenteer met een if/else-statement i.c.m. de isset() en empty() functies
    #Experimenteer met switch-case statement (incl default)
    #Experimenteer met while, do/while, for, for each en pas ook break en continue
    toe
    #Pas in 2 verschillende bestanden de 2 manieren voor namespaces toe
    #Pas in 1 bestand 2 verschillende namespaces toe
    #Pas de namespaces toe in een bestand
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
  echo '<hr>' . PHP_EOL;

  //casting
  echo (int) $string;

  echo '<hr>' . PHP_EOL;

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
  echo "<hr>\n";

  $c = 2726;
  //Minus
  $c = $c - 9383;
  echo $c . "<br>\n";
  //Add
  $c = $c + 39383;
  echo $c . "<br>\n";
  //Divide
  $c = $c / 3;
  echo $c . "<br>\n";
  //Multiply
  $c = $c * 38937;
  echo $c . "<br>\n";
  //Modulo
  $c = $c % 4;
  echo $c . "<br>\n";
  //Power
  $c = $c ** 5;
  echo $c . "<hr>\n";

  //Concatenate strings
  $abra = 'abra';
  $kadabra = 'kadabra';
  $abra .= $kadabra;
  echo $abra . '<hr>' . PHP_EOL;

  echo "<hr>\n";

  //while-loop
  $w = 10;
  while ($w > 0) {
    echo "<code>Countdown: $w</code>\n";
    $w--;
  }

  echo "<hr>\n";

  //do-while-loop
  $dw = 0;
  do {
    if ($dw == 6) {
      echo "BREAK";
      break;
    }
    echo "<code>Countdown: $dw</code>\n";
    $dw++;
  } while ($dw < 10);

  echo "<hr>\n";

  //for-loop
  for ($f = 0; $f <= 10; $f++) {
    if($f == 5) {
      echo 'Count I Nu without 5';
      continue;
    }
    echo "<code>Count $f</code>\n";
  }

  echo "<hr>\n";

  //foreach
  $arr = ["boter", "kaas", "eieren"];
  foreach ($arr as $aa) {
    echo "<p>$aa</p>\n";
  }

  echo "<hr>\n";

  //switch
  $s = "zon";
  switch($s) {
    case "regen":
      echo 'regen';
      break;
    case "zon":
      echo "blue sky's";
      break;
    case "thunder":
      echo "bammmm";
      break;
    default:
      echo "you must live on the moon!";
  }

  echo "<hr>\n";

  //bitwise
  $bit = 1;
  $bit >> 2;
  echo $bit . '<br>' . PHP_EOL;
  $bit << 1;
  echo $bit . '<br>' . PHP_EOL;
  echo (4 ^ $bit) . '<br>' . PHP_EOL;
  echo ~$bit . '<br>' . PHP_EOL;
  echo (2 | $bit) . '<br>' . PHP_EOL;
  echo (6 & $bit) . '<br>' . PHP_EOL;

  //comparison and && || XOR
  $xxx = 5;
  if ($xxx !== 'vijf' && $xxx != 4 || $xxx != 6) {
    echo "5 is niet 4 en niet vijf of 6";
  } elseif ($xxx == 5 XOR $xxx < 9) {
    echo 'od fat duss';
  } else {
    echo "en dan kom je hier terecht";
  }

  echo "<hr>\n";

  //Ternary
  $ter = 5;
  echo ($ter < 6 ? "correct" : "fout");
  /*******************
  *if ($ter < 6) {
  *  echo "correct";
  *} else {
  *  echo "fout";
  *}
  ********************/
?>
