<?php//Model (temporary data carrier)
namespace Cat;

class Cat {
  //Set the class properties
  public $id;
  public $name;
  public $color;
  public $type;
  public $price;
  public $status;

  //Connstructor creates the object
  public function __construct($catObj) {
    $this->setValues($catObj);
  }

  //Method to set all the properties from $catObj
  function setValues($catObj) {
    //Set values for the properties for a Cat object
    $this->id = $catObj['cat_id'];//TODO why can't this be done with -> since the object should contain both array and object
    $this->name = $catObj['name'];
    $this->color = $catObj['color'];
    $this->type = $catObj['type'];
    $this->price = $catObj['price'];
    $this->status = $catObj['status'];
  }
}
?>
