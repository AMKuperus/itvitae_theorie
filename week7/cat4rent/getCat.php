<?php

//Identify the type of request
//Identify if a cat name is set and if this is in fact alphanumeric values
if(isset($_GET['cat']) && ctype_alpha($_GET['cat'])) {
  echo $_GET['cat'];
  $get = $_GET['cat'];
//Identify a cat by id and check if it is in fact a digit
} elseif(isset($_GET['id']) && ctype_digit($_GET['id'])) {
  //We identify the get-request as a cat id-request
  echo $_GET['id'];
  $get = $_GET['id'];
}

?>
