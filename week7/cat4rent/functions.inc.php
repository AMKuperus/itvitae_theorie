<?php
## Functions for Cat4Rent system -- By AMKuperus ##

function addCatForm() {
  echo '<form method="POST">
        <fieldset><legend>Add a cat</legend>
        <p>Name: <input type="text" name="name" required></p>
        <p>Color: <input type="text" name="color" required></p>
        <p>Type: <input type="text" name="type" required></p
        <p>Price: <select name="price" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select></p>
        <p>Status: <select name="status" required>
                    <option value="available">Available</option>
                    <option value="unavailable">Unavailable</option>
                </select>
        <input type="submit">
        </fieldset></form>';
}

function actionAddCat() {
  if(isset($_POST['name'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  }
  if(isset($_POST['color'])) {
    $color = filter_var($_POST['color'], FILTER_SANITIZE_STRING);
  }
  if(isset($_POST['type'])) {
    $type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
  }
  if(isset($_POST['price'])) {
    $price = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
  }
  if(isset($_POST['status'])) {
    $status = filter_var($_POST['status'], FILTER_SANITIZE_STRING);
  }
  echo "$name | $color | $type | $price | $status";
  addCat($name, $color, $type, $price, $status);
  echo '<p>Succesfully added: ' . $name . ' to the database</p>';
}

?>
