<?php
/*********************************************************************************
 *                A class to easily build html-tables                            *
 * Contains the basic most used html-table-elements and attributes.              *
 * @author AMKuperus                                                             *
 * @version 0.1Beta  | Last revision: 15 July 2017                               *
 * @license GPL Do not alter or reproduce without the knowledge of the author.   *
 * @todo automate $items to fetch items from desires objects in tableBody-method *
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
    $this->head[] = "<table class=\"$class\" id=\"$id\">\n<caption>$caption</caption>\n<tr>\n";
    foreach($items as $i) {
      $this->head[] = "<th>$i</th>\n";
    }
    $this->head[] = "</tr>\n";
  }

  /**
   * Create the body off the table
   * @param  array  $items Array containing the $key->value for access to the
   *                       object inside the @param $array[]
   * @param  array  $array Array filled with objects for filling the body.
   */
  public function tableBody($items, $array) {
    foreach($array as $a) {
      $this->body[] = "<tr>\n";
      //TODO create array as shown below automaticly, based on defined list entered in parameters
      //$items = [$a->id, $a->name, $a->color, $a->type, $a->price, $a->status];
      foreach($a as $i) {
        $this->body[] = "<td>$i</td>\n";
      }
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
    foreach($this->head as $s) {
      echo $s;
    }

    foreach($this->body as $b) {
      echo $b;
    }

    foreach($this->foot as $f) {
      echo $f;
    }
  }
}
?>
