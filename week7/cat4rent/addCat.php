<?php
  include 'inc/head.inc.php';
  include 'class/CatController.class.php';

  use Cat\CatController;

  $catControl = new CatController($db);

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Do something with data and add to database
    $catControl->checkCat();
  }

  $catControl->viewAddCat();
?>
