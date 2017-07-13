<?php
  include 'head.inc.php';
  include 'CatController.class.php';

  use Cat\CatController;

  $catControl = new CatController($db);
  echo '<h1>All our cats</h1>';
  $catControl->viewCats();

?>
