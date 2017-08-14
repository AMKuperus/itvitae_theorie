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
    $custObj = $this->getCustomer($id);
    //Check if the customer exists, if is_bool is true the customer does not exist.
    if(is_bool($custObj)){
      echo 'Oops something went wrong here, we do not seem to have a customer with the id: ' . $id;
    } else {
      CustomerView::showCustomer($custObj);
    }
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
   * @return Object     Customer Object OR @return Boolean false (if customer is nonexistant)
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
    $result = $ask->fetch(PDO::FETCH_ASSOC);
    //If $result is a boolean then the id is not available in the database and
    //the customer does not exist.
    if(is_bool($result)) {
      return false;
    } else {
      //If the customer exists return it as a Customer-object.
      $return = new Customer($result);
      return $return;
    }
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
