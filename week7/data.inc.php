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

function showCats() {
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
}
?>
