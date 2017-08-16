<?php

namespace Register;

include 'Register.class.php';
include 'RegisterView.class.php';

use \PDO;

class RegisterController {
  public $db;

  public function __construct($db) {
    $this->db = $db;
  }

  //TODO create new transaction
  //TODO select customer
  //TODO select cat
  //TODO checkout
  //TODO send data to db
  //TODO generate history per customer
  //TODO generate hisory per cat
  //TODO generate overall history
}
?>
