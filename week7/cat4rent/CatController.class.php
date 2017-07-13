<?php//Controller
namespace Cat;

include 'Cat.class.php';
include 'CatView.class.php';
use \PDO;

class CatController {
  public $db;
  //TODO add Cat/edit Cat
  //TODO get cat (id)

  //Constructor sets the database property so we can use it inside this class
  public function __construct($db) {
    $this->db = $db;
  }

  //Show all the cats in a table
  public function viewCats(){
    //Get all the cats
    $arrCats = $this->getAllCats();
    //Calling static method showCatTable() from CatView with $arrCats
    CatView::showCatTable($arrCats);
  }

  //Get all the cats from the database and return a array filled with Cats objects
  public function getAllCats() {
    //Create query in $sql
    $sql = "SELECT * FROM cats";
    //Prepare query in $ask
    $ask = $this->db->prepare($sql);
    //Execute query $ask
    $ask->execute();
    //fetch all and give all fetched from $ask to $result
    $result = $ask->fetchAll();
    //Create array to store new Cat objects in all together
    $arrCats = [];
    //Loop trough results untill the end adding every Cat object to the $arrCats[]
    foreach($result as $r){
      //Create object $objCat from Cat which runs the Cat constructor from the class
      $objCat = new Cat($r);
      //Push the $objCat to the $arrCat[]
      $arrCats[] = $objCat;
    }
    //Return the $arrCat[]
    return $arrCats;
  }
}
?>
