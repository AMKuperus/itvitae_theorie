<?php
//Presentation of data
namespace Cat;

include 'FormBuilder.class.php';

use Form\FormBuilder;

class CatView {
  //TODO showresult function

  public static function showCat($catObj) {
    //TODO showinfo function
  }

  //Show table with all cats
  public static function showCatTable($arrCats) {
    //Aray containing all head-items for the table
    $head = ['ID', 'Name', 'Color', 'Type', 'Price', 'Status'];
    echo "<table><tr>\n";
    //Loop trough all the head-items and make a <th>-element
    foreach($head as $h) {
      echo "<th>$h</th>\n";
    }
    echo "</tr>\n";
    //Loop trough $arrCats and for each object create a new table row with filling.
    foreach($arrCats as $a) {
      //Array containing all the items to show in the table-td-lements
      $items = [$a->id, $a->name, $a->color, $a->type, $a->price, $a->status];
      echo "<tr>\n";
      //Loop trough all elements
      foreach($items as $i) {
        echo "<td>$i</td>\n";
      }
      echo "</tr>\n";
      }
    echo "</table>\n";
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
