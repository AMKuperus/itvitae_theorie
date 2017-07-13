<?php
//Model (temporary data carrier)
namespace Cat;

class Cat {
  //Set the class properties
  public $id;
  public $name;
  public $color;
  public $type;
  public $price;
  public $status;

  //Constructor creates the object
  public function __construct($catObj) {
    $this->setValues($catObj);
  }

  //Method to set all the properties from $catObj
  function setValues($arrCats) {
    //Set values for the properties for a Cat object
    $this->id = $arrCats['cat_id'];
    $this->name = $arrCats['name'];
    $this->color = $arrCats['color'];
    $this->type = $arrCats['type'];
    $this->price = $arrCats['price'];
    $this->status = $arrCats['status'];
  }
}
?>
