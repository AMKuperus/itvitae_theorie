<?php
namespace Customer;

include 'Customer.class.php';
include 'CustomerView.class.php';
use \PDO;

class CustomerController {
  public $db;

  public function __construct($db) {
    $this->db = $db;
  }

  //TODO viewCustomers
  //TODO viewAddCustomer
  //TODO getCustomer
  //TODO getAllCustomers
  //TODO checkCustomer
  //TODO addCustomer
  //TODO updateBehaviour
  //TODO blacklistCustomer
}
