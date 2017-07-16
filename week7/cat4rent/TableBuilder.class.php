<?php
/*********************************************************************************
 *                A class to easily build html-tables                            *
 * Contains the basic most used html-table-elements and attributes.              *
 * @author AMKuperus                                                             *
 * @version 0.3Beta  | Last revision: 16 July 2017                               *
 * @license GPL Do not alter or reproduce without the knowledge of the author.   *
 * @todo add missing html table elements/attributes                              *
 *********************************************************************************/
namespace Tools;

class TableBuilder {
  private $head = [];
  private $body = [];
  private $foot = [];

  /**
   * Create the head off the table
   * @param  array  $items    Array containing all header-items.
   * @param  string $caption  Optional, element to define table caption.
   * @param  string $class    Optional, assign a class to the table for attaching
   *                          the table to css/js.
   * @param  string $id       Optional, assign an ID to the table for attaching
   *                          the table to css/js.
   * When you do not need caption and class add a empty string as parameter to
   * the method-call
   */
  public function tableHead($items, $caption = '', $class = '', $id = '') {
    //Start table and add to $this->head[]
    $this->head[] = "<table class=\"$class\" id=\"$id\">\n";
    //Only when @param caption contains a value add the caption to $this->head[]
    if(strlen($caption) >= 1) {
      $this->head[] = "<caption>$caption</caption>\n";
    }
    //Start table row
    $this->head[] = "<tr>\n";
    //Loop trough @param $items and add them to $this->head[]
    foreach($items as $i) {
      $this->head[] = "<th>$i</th>\n";
    }
    //Close the row and add to $this->head[]
    $this->head[] = "</tr>\n";
  }

  /**
   * Create the body off the table
   * @param  array  $items Array containing names off the items you want in the
   *                       table, in the order you want them to appear in.
   *                       Warning: This array must be an exact match to the
   *                       naming used in the class and may not contain whitespace.
   * @param  array  $array Array filled with objects for filling the body.
   */
  public function tableBody($items, $array) {
    //Enter the array
    foreach($array as $a) {
      //Start the row and add to $this->body[]
      $this->body[] = "<tr>\n";
      //Loop trough @param $items and get all desired objects
      foreach($items as $i) {
          //Check if the property is in the class
          if(property_exists($a, $i)) {
            //Put property in $this->body[]
            $this->body[] = "<td>{$a->$i}</td>\n";
        } else {
            //Put empty cell in $this->body[]
            $this->body[] = "<td></td>\n";
        }
      }
      //Close the row and add to $this->body[]
      $this->body[] = "</tr>\n";
    }
  }

  /**
   * Create the footer off the table.
   */
  public function tableFoot() {
    $this->foot[] = "</table>";
  }

  /**
   * Publish the table.
   * @return echo all table elements in proper order.
   */
  public function publish() {
    //Publish the head
    foreach($this->head as $s) {
      echo $s;
    }
    //Publish the body
    foreach($this->body as $b) {
      echo $b;
    }
    //Publish the foot
    foreach($this->foot as $f) {
      echo $f;
    }
  }
}
?>
