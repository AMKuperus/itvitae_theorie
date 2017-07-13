<?php
  include 'head.inc.php';
//TODO implement in cats.php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Do something with data and add to database
    actionAddCat();//TODO rebuild to work with class
  } else {
    //
  }
  addCatForm();
?>
