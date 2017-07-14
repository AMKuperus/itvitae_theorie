<?php
  include 'head.inc.php';
  include 'CatController.class.php';

  use Cat\CatController;

  $catControl = new CatController($db);

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Do something with data and add to database
    $catControl->checkCat();
  } else {
    //Future error reporting option
  }
  $catControl->viewAddCat();
?>
