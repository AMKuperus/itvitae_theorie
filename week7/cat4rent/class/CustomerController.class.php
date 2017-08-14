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
   * Sow a customer by specific id
   * @param  string   $id   The id of the customer to show.
   * @return echo           Echo's the customer-information from CustomerView-class
   */
  public function viewCustomer($id) {
    CustomerView::showCustomer($this->getCustomer($id));
  }

  /**
   * Show a form to add a customer.
   * @return Object  FormBuilder-object
   */
  public function viewAddCustomer() {
    CustomerView::showAddCustomerForm();
  }

  /**
   * Get a customer by id from database
   * @param  int $id The id
   * @return Object     Customer Object
   */
  public function getCustomer($id) {
    //Create query
    $sql = "SELECT * FROM customers WHERE customer_id = :id";
    //Prepare sql
    $ask = $this->db->prepare($sql);
    //Bind values
    $ask->bindValue(':id', $id, FILTER_SANITIZE_STRING);
    //Execute
    $ask->execute();
    $return = new Customer($ask->fetch(PDO::FETCH_ASSOC));
    return $return;
  }

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

  //TODO addCustomer
  //TODO updateBehaviour
  //TODO blacklistCustomer
}
