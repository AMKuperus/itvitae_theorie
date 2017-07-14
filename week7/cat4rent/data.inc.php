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
