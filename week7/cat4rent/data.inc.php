<?php
require_once('config.inc.php');

try {
  $db = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
  //Set PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e){
  echo '|Databse connection error: ' . $e->getMessage() . ' |<br>';
  die();
}

/*<--DEPRECATED function showCats() {
  global $db;
  $sql = "SELECT * FROM cats";

  $res = $db->query($sql);
  $res->setFetchMode(PDO::FETCH_OBJ);

  echo '<table>' .
        '<tr>' .
          '<th>ID</th>' .
          '<th>Name</th>' .
          '<th>Color</th>' .
          '<th>Type</th>' .
          '<th>Price</th>' .
          '<th>Status</th>' .
        '</tr>';
  foreach ($res as $r) {
    echo "<tr>
          <td>{$r->cat_id}</td>
          <td>{$r->name}</td>
          <td>{$r->color}</td>
          <td>{$r->type} </td>
          <td>{$r->price}</td>
          <td>{$r->status}</td>
          </tr>\n";
  }
  echo '</table>';
}DEPRECATED-->*/

/*<--DEPRECATEDfunction addCat($name, $color, $type, $price, $status) {
  global $db;
  $sql = "INSERT INTO cats (name, color, type, price, status) VALUES
                          (:name, :color, :type, :price, :status)";
  $do = $db->prepare($sql);
  $do->bindValue(':name', $name, PDO::PARAM_STR);
  $do->bindValue(':color', $color, PDO::PARAM_STR);
  $do->bindValue(':type', $type, PDO::PARAM_STR);
  $do->bindValue(':price', $price, PDO::PARAM_STR);
  $do->bindValue(':status', $status, PDO::PARAM_STR);
  $do->execute();
}-->DEPRECATED*/

function showCustomers() {
  global $db;
  $sql = "SELECT * FROM customers";

  $res = $db->query($sql);
  $res->setFetchMode(PDO::FETCH_OBJ);
  echo '<table>' .
        '<tr>' .
          '<th>ID</th>' .
          '<th>First Name</th>' .
          '<th>Last Name</th>' .
          '<th>Behaviour code</th>' .
        '</tr>';
  foreach ($res as $r) {
    echo "<tr>
          <td>{$r->customer_id}</td>
          <td>{$r->first_name}</td>
          <td>{$r->last_name}</td>
          <td>{$r->behaviour_code} </td>
          </tr>\n";
  }
  echo '</table>';
}
?>
