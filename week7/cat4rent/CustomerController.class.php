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

  /**
   * Show all the customers in a table.
   * @return Object   TableBuilder-object
   */
  public function viewCustomers() {
    $arrCustomers = $this->getAllCustomers();
    CustomerView::showCustomersTable($arrCustomers);
  }

  /**
   * Show a form to add a customer.
   * @return Object  FormBuilder-object
   */
  public function viewAddCustomer() {
    CustomerView::showAddCustomerForm();
  }

  //TODO getCustomer

  /**
   * Get all the customers from the database and create Customers-objects for
   * each customer.
   * @return Array   Array containing all Customer-objects.
   */
  public function getAllCustomers() {
    $sql = "SELECT * FROM customers";
    $ask = $this->db->prepare($sql);
    $ask->execute();
    $result = $ask->fetchAll();
    $arrCustomers = [];
    foreach ($result as $r) {
      $objCustomer = new Customer($r);
      $arrCustomers[] = $objCustomer;
    }
    return $arrCustomers;
  }

  //TODO checkCustomer
  //TODO addCustomer
  //TODO updateBehaviour
  //TODO blacklistCustomer
}
