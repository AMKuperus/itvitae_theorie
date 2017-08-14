<?php
//Presentation of data
namespace Cat;

include 'tools/TableBuilder.class.php';
include 'tools/FormBuilder.class.php';

use Tools\TableBuilder;
use Tools\FormBuilder;

class CatView {

/**
 * Show information about a specific cat.
 * @param  Cat-Object $catObj   The cat to get information about as a object.
 * @return String     $catInfo  <div> with cat info.
 */
public static function showCat($catObj) {
    $catInfo =  '<div><p>Cat: ' . $catObj->name . ' | ID#: ' . $catObj->id . '</p>' .
                '<p>Color: ' . $catObj->color . '</p>' .
                '<p>Type cat: ' . $catObj->type . '</p>' .
                '<p>Status: ' . $catObj->status . ' | Prize: ' . $catObj->price . '</p>' .
                '</div>';
    return $catInfo;
  }

  /**
   * Show table with all cats
   * Uses TableBuilder to build the table
   * @param  Array $arrCats Array containing Cat-objects
   */
  public static function showCatTable($arrCats) {
    $catTable = new TableBuilder();
    $head = ['ID', 'Name', 'Color', 'Type', 'Price', 'Status'];
    $catTable->tableHead($head, 'All the cat\'s');
    $items = ['id'     => ['getCat.php?id' => 'link'],
              'name'   => ['getCat.php?cat' => 'link'],//this link should be a baseurl that gets extended
              'color'  => [null],
              'type'   => ['em'],
              'price'  => ['strong'],
              'status' => ['em']];
    //var_dump($items);
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
