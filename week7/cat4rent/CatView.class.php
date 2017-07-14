<?php
//Presentation of data
namespace Cat;

class CatView {
  //TODO showinfo function
  //TODO showresult function

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
    echo '<form method="POST">
          <fieldset><legend>Add a cat</legend>
          <p>Name: <input type="text" name="name" required></p>
          <p>Color: <input type="text" name="color" required></p>
          <p>Type: <input type="text" name="type" required></p
          <p>Price: <select name="price" required>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="E">E</option>
                  </select></p>
          <p>Status: <select name="status" required>
                      <option value="available">Available</option>
                      <option value="unavailable">Unavailable</option>
                  </select>
          <input type="submit">
          </fieldset></form>';
  }

}
?>
