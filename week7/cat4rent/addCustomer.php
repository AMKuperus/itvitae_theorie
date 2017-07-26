<?php
  include 'head.inc.php';
  include 'CustomerController.class.php';

  use Customer\CustomerController;

  $customerControl = new CustomerController($db);

  $customerControl->viewAddCustomer();

?>
