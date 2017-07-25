<?php
namespace Customer;

class Customer {
  public $id;
  public $fname;
  public $lname;
  public $behaviour;

  public function __construct($arrCustomer) {
    $this->setValues($arrCustomer);
  }

  function setValues($arrCustomer) {
    $this->id = $arrCusomer['id'];
    $this->fname = $arrCustomer['first_name'];
    $this->lname = $arrCustomer['last_name'];
    $this->behaviour = $arrCustomer['behaviour_code'];
  }

}
?>
