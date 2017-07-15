<?php
//Presentation of data
namespace Cat;

include 'TableBuilder.class.php';
include 'FormBuilder.class.php';

use Tools\TableBuilder;
use Tools\FormBuilder;

class CatView {
  //TODO showresult function

  public static function showCat($catObj) {
    //TODO showinfo function
  }

  //Show table with all cats
  public static function showCatTable($arrCats) {
    $catTable = new TableBuilder();
    $head = ['ID', 'Name', 'Color', 'Type', 'Price', 'Status'];
    $catTable->tableHead($head, 'All the cat\'s');
    //TODO fix TableBuilder class so it can crate items from such array as below
    //$items = ['id', 'name', 'color', 'type', 'price', 'status'];
    $items = [];
    $catTable->tableBody($items, $arrCats);
    $catTable->tableFoot();
    $catTable->publish();
  }

  //Show a form to add a cat to the database
  public static function showAddCatForm() {
    $formOptions = ['name' => 'addCatForm', 'method' => 'POST', 'action' => '',
                    'enctype' => '', 'target' => ''];
    //TODO alter select options array to pull key-values from database
    $prizes = ['A' => '100', 'B' => '80', 'C' => '60', 'D' => '30', 'E' => '15'];
    $status = ['Available' => 'Available', 'Unavailable' => 'Unavailable'];
    $catForm = new FormBuilder();
    $catForm->startForm($formOptions);
    $catForm->startFieldset('Add a cat');
    $catForm->inputText('Name: ', 'name', 'required', 'Cat name');
    $catForm->inputText('Cat color: ', 'color', 'required', 'Cat\'s color');
    $catForm->inputText('Cat type: ', 'type', 'required', 'Cat type');
    $catForm->select('Prize: ', 'price', $prizes, 'required');
    $catForm->select('Status: ', 'status', $status, 'required');
    $catForm->submit('Add cat');
    $catForm->endForm();
    $catForm->publish();
  }

}
?>
