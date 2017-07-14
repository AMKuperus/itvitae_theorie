<?php
//    --------------- A class to easily build forms ----------------
//    by AMKuperus | Version: 0.3Beta | Last revision: 14 July 2017
//    Do not alter or reproduce without the knowledge of the author.
//    Contains the basic most used html-form-elements and attributes.
//              TODO add more input options in the future

namespace Form;

class FormBuilder {
  private $start = [];
  private $content = [];
  private $end = [];

  //Start the form
  //Use following example $options[] associative array and fill in desired options
  //All options you do not want to use you should leave blank.
  /*  $options = [ 'name' => '',
      	           'method' => 'POST',
                   'action' => '',
                   'enctype' => '',
                   'target' => ''];                                           */
  public function startForm($options) {
    $this->start[] = "<form name=\"{$options['name']}\" method=\"{$options['method']}\"
                      action=\"{$options['action']}\" enctype=\"{$options['enctype']}\"
                      target=\"{$options['target']}\">\n";
  }

  //Add fieldset with optional title $legend
  //$legend represents title of fieldset that shows in the fieldset
  public function startFieldset($legend = '') {
    $this->start[] = "<fieldset><legend>$legend</legend>\n";
    $this->endFieldset();
  }
  //Add a text-input HTML element
  //$title is the title displayed in front of the textfield | $name is the name
  //$required and $placeholder are optional, however if you need placeholder and
  //don't need required the fill in '' for required when calling method.
  public function inputText($title, $name, $required = '', $placeholder = '') {
    $this->start[] = "<p>$title<input type=\"text\" name=\"$name\" placeholder=\"$placeholder\" $required></p>\n";
  }

  //Create a select html attribute with dropdownlist containing options
  //$title is name in front of input field | $name = name
  //In order to use attributes multiple and required fill in $multiple and $required
  //with coresponding values.
  //value $values should contain a associative array containing key-value pairs
  //key becomes value-attribute and value becomes the visible name in option.
  //$multiple and $required are optional, however if not required is not needed but
  //multiple is required should be added as '' in method-call.
  public function select($title, $name, $values, $required = '', $multiple = '') {
    //Create the <select>
    $this->content[] = "<p>$title<select name=\"$name\" $required $multiple>\n";
    //Create the options from array with foreach
    foreach($values as $k => $v) {
      $this->content[] = "<option value=\"$k\">$v</option>\n";
    }
    //Create end for select
    $this->content[] = "</select></p>\n";
  }

  //Add submit button with optional $value
  //$value represents the name on the button
  public function submit($value = '') {
    $this->content[] = "<input type=\"submit\" value=\"$value\">\n";
  }

  //End the fieldset
  private function endFieldset() {
    $this->end[] = "</fieldset>\n";
  }

  //End the form
  public function endForm() {
    $this->end[] = "</form>\n";
  }

  //Publish the form
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
