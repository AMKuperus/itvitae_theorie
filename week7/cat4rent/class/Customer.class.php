<?php
namespace Customer;

class Customer {
  public $id;
  public $fname;
  public $lname;
  public $behaviour;

  public function __construct($arrCustomer) {
    //TODO make contstructor work so it checks for $_POST or else does normal setValues
    $this->setValues($arrCustomer);
  }

  function setValues($arrCustomer) {
    $this->id = $arrCustomer['customer_id'];
    $this->fname = $arrCustomer['first_name'];
    $this->lname = $arrCustomer['last_name'];
    $this->behaviour = $arrCustomer['behaviour_code'];
  }

}
?>
