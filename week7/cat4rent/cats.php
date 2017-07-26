<?php
  include 'inc/head.inc.php';
  include 'class/CatController.class.php';

  use Cat\CatController;

  $catControl = new CatController($db);
  echo '<h1>All our cats</h1>';
  $catControl->viewCats();

?>
