<?php
require_once('config/config.inc.php');

try {
  $db = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
  //Set PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e){
  echo '|Databse connection error: ' . $e->getMessage() . ' |<br>';
  die();
}

?>
