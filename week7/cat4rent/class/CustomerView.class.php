<?php
namespace Customer;

include 'tools/TableBuilder.class.php';
include 'tools/FormBuilder.class.php';

use Tools\TableBuilder;
use Tools\FormBuilder;

class CustomerView {
  /**
   * Show information about specific customer.
   * @param  Object   $customerObj  Customer-object
   * @return String                 <div> with customer-info.
   */
  public static function showCustomer($customerObj) {
    $customerInfo = '<div><p>Name: ' . $customerObj->fname . ' ' .
                    $customerObj->lname . '</p>' .
                    '<p>ID: ' . $customerObj->id .
                    ' | Behaviourcode: ' . $customerObj->behaviour .
                    '</p></div>';
    echo $customerInfo;
  }

  /**
   * Create a table that shows all the customers present in teh database.
   * @param  Array   $array   Array containing all customer-objects
   * @return Object           TableBuilder-object
   */
  public static function showCustomersTable($array) {
    $table = new TableBuilder();
    $head = ['ID', 'First name', 'Last name', 'Behaviour code'];
    $table->tableHead($head, 'All our customers');
    $items = ['id' => ['getCustomer.php?id' => 'link'],
              'fname' => [null],
              'lname' => [null],
              'behaviour' => [null]];
    $table->tableBody($items, $array);
    $table->tableFoot();
    $table->publish();
  }

  /**
   * Create a form to add new customers to the database.
   * @return Object           FormBuilder-object
   */
  public static function showAddCustomerForm() {
    $formOptions = ['name' => 'addCustomerForm', 'method' => 'POST', 'action' => '',
                    'enctype' => '', 'target' => ''];
    $form = new FormBuilder();
    $form->startForm($formOptions);
    $form->startFieldset('Register a new customer');
    $form->inputText('First name: ', 'fname', 'required', 'first name');
    $form->inputText('Last Name: ', 'lname', 'required', 'last name');
    $form->submit('Register');
    $form->endForm();
    $form->publish();
  }

}
?>
