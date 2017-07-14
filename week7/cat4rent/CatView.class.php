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
    echo '<table>' .
          '<tr>' .
            '<th>ID</th>' .
            '<th>Name</th>' .
            '<th>Color</th>' .
            '<th>Type</th>' .
            '<th>Price</th>' .
            '<th>Status</th>' .
          '</tr>';
    //Loop trough $arrCats and for each object create a new table row with filling.
    foreach($arrCats as $a) {
      echo "<tr>
            <td>{$a->id}</td>
            <td>{$a->name}</td>
            <td>{$a->color}</td>
            <td>{$a->type} </td>
            <td>{$a->price}</td>
            <td>{$a->status}</td>
            </tr>\n";
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
