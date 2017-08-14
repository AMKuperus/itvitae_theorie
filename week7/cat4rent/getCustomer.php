<?php
include 'inc/head.inc.php';
include 'class/CustomerController.class.php';

use Customer\CustomerController;

//Identify the request
//Identify by id and check wheter it is a id by checking digits
if(isset($_GET['id']) && ctype_digit($_GET['id'])) {
  $id = htmlentities($_GET['id']);
  $control = new CustomerController($db);
  $control->viewCustomer($id);
} else {
  echo 'Oops something went wrong here.';
}
