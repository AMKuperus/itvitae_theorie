<?php
include 'inc/head.inc.php';
include 'class/CatController.class.php';

use Cat\CatController;

$control = new CatController($db);

//Identify the type of request
//Identify if a cat name is set and if this is in fact alphanumeric values
if(isset($_GET['cat']) && ctype_alpha($_GET['cat'])) {
  $cat = htmlentities($_GET['cat']);
  //TODO search and grab cat by naem
  echo $cat;
//Identify a cat by id and check if it is in fact a digit
} elseif(isset($_GET['id']) && ctype_digit($_GET['id'])) {
  //We identify the get-request as a cat id-request
  $id = htmlentities($_GET['id']);
  //Grab the cat
  $control->viewCatById($id);
} else {
  //When nothing good is submitted
  echo 'Oops something went wrong here';
}

?>
