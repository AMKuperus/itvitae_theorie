<?php
  include 'inc/head.inc.php';
  include 'class/CustomerController.class.php';

  use Customer\CustomerController;

  $customerControl = new CustomerController($db);

  $customerControl->viewAddCustomer();

?>
