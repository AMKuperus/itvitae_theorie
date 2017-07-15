<?php
/*********************************************************************************
 *                 A class to easily build forms                                 *
 * Contains the basic most used html-form-elements and attributes.               *
 * @author AMKuperus                                                             *
 * @version 0.4Beta  | Last revision: 15 July 2017                               *
 * @copyright Do not alter or reproduce without the knowledge of the author.     *
 * @todo add more input-elements                                                 *
 * @todo implement values for value-keeping when form is not filled in correct   *
 * @todo implement class/id options for hooking to css                           *
 *********************************************************************************/
namespace Form;

class FormBuilder {
  private $start = [];
  private $content = [];
  private $end = [];

  /**
   * Start the form
   * @param  []  $options Contains all desired attributes to start the form.
   *                      Use following example $options[] associative array
   *                      and fill in desired options, leave options you
   *                      don't want empty as ''.
   *                      Example array:
   *                         $options = [ 'name' => '',
   *     	                                'method' => 'POST',
   *                                      'action' => '',
   *                                      'enctype' => '',
   *                                      'target' => ''];
   * Will add the outcome to the array start[].
   */
  public function startForm($options) {
    $this->start[] = "<form name=\"{$options['name']}\" method=\"{$options['method']}\"
                      action=\"{$options['action']}\" enctype=\"{$options['enctype']}\"
                      target=\"{$options['target']}\">\n";
  }

  /**
   * Add fieldset
   * @param string $legend Optional, represents title of fieldset that shows in
   *                       the fieldset.
   * Will add the outcome to the array start[].
   */
  public function startFieldset($legend = '') {
    $this->start[] = "<fieldset><legend>$legend</legend>\n";
    $this->endFieldset();
  }

  /**
   * Add a text-input HTML element.
   * @param  string $title       The title displayed in front of the textfield.
   * @param  string $name        The name for the inputfield.
   * @param  string $required    Optional, when filled with 'required' inputfield
   *                             will be set as required.
   * @param  string $placeholder Optional, placeholder text for the inputfield
   * $required and $placeholder are optional, however if you need placeholder and
   * don't need required the fill in '' for required when calling method.
   * Will add the outcome to the array content[].
   */
  public function inputText($title, $name, $required = '', $placeholder = '') {
    $this->content[] = "<p><label>$title</label><input type=\"text\" name=\"$name\" placeholder=\"$placeholder\" $required></p>\n";
  }

  /**
   * Create a select html attribute with dropdownlist containing options.
   * @param  string       $title    The title displayed in front of the textfield.
   * @param  string       $name     The name for the inputfield.
   * @param  assoc-array  $values   A associative array containing key-value pairs.
   *                                Key becomes value-attribute and value becomes
   *                                the visible name in option.
   * @param  string       $required Optional, when filled with 'required' inputfield
   *                                will be set as required.
   * Will add the outcome to the array content[].
   */
  public function select($title, $name, $values, $required = '') {
    //Create the <select>
    $this->content[] = "<p><label>$title</label><select name=\"$name\" $required>\n";
    //Create the options from array with foreach
    foreach($values as $k => $v) {
      $this->content[] = "<option value=\"$k\">$v</option>\n";
    }
    //Create end for select
    $this->content[] = "</select></p>\n";
  }

  /**
   * Add submit button.
   * @param  string $value Optional, name displayed on the button.
   * Will add the outcome to the array content[].
   */
  public function submit($value = '') {
    $this->content[] = "<input type=\"submit\" value=\"$value\">\n";
  }

  /**
   * End the fieldset.
   * Will add the outcome to the array end[].
   */
  private function endFieldset() {
    $this->end[] = "</fieldset>\n";
  }

  /**
   * End the form.
   * Will add the outcome to the array end[].
   */
  public function endForm() {
    $this->end[] = "</form>\n";
  }

  /**
   * Publish the form
   * @return echo's the form.
   */
  public function publish() {
    //Publish the beginning of the form
    foreach($this->start as $v) {
      echo "$v";
    }
    //Publish the content section of the form
    foreach($this->content as $c) {
      echo "$c";
    }
    //Publish the end of the form
    foreach($this->end as $end) {
      echo "$end";
    }
  }

}
