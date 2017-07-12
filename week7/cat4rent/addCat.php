<?php
  include 'head.inc.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Do something with data and add to database
    actionAddCat();
  } else {
    //
  }

  addCatForm();
?>
