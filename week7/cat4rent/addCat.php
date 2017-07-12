<?php
require 'data.inc.php';
include 'functions.inc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  //Do something with data and add to database
  actionAddCat();
} else {
  //
}
echo '<a href="cat4rent.php">Back to all cats</a>';

addCatForm();
?>
