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

  foreach ($res as $r) {
    echo "ID: {$r->cat_id} | Name: {$r->name} | Color: {$r->color} | Type: {$r->type}
          | Price: &eur;{$r->price} | Status: {$r->status}<br>\n";
  }
}
?>
