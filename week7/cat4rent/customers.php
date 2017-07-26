<?php
  include 'inc/head.inc.php';
  include 'class/CustomerController.class.php';

  use Customer\CustomerController;

  $customerControl = new CustomerController($db);

  echo '<h1>All our customers</h1>';
  $customerControl->viewCustomers();
?>
