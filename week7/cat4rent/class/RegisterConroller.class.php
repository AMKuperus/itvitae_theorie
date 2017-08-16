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
}
?>
