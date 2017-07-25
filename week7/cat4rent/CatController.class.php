<?php
//Controller
namespace Cat;

include 'Cat.class.php';
include 'CatView.class.php';
use \PDO;

class CatController {
  public $db;
  //TODO edit Cat??

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
    //CatView::showAddCatForm();
  }

  //Show addCatForm
  public function viewAddCat() {
    //Calling static method showAddCatForm() from CatView
    CatView::showAddCatForm();
  }

  /**
   * Get a cat from the database
   * @param  int $id      Id of the cat to get info about.
   * @return echo string  from CatView::showCat
   */
  public function getCat($id) {
    //Create query
    $sql = "SELECT * FROM cats WHERE cat_id = :id";
    //Prepare query
    $ask = $this->db->prepare($sql);
    //Bind values
    $ask->bindValue(':id', $id, FILTER_SANITIZE_STRING);
    //Execute
    $ask->execute();
    $return = new Cat($ask->fetch(PDO::FETCH_ASSOC));
    echo CatView::showCat($return);
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

  //Filter all data from $_POST[] and sanitizes it. Sets all sanitized data in
  //$catArr[] and gives it to addCat()
  public function checkCat() {
    //Create array for the data
    $catArr = [];
    //Sanitize all $_POST here and when ok sent to addCat()
    if(isset($_POST['name'])) {
      $catArr['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['color'])) {
      $catArr['color'] = filter_var($_POST['color'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['type'])) {
      $catArr['type'] = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['price'])) {
      $catArr['price'] = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['status'])) {
      $catArr['status'] = filter_var($_POST['status'], FILTER_SANITIZE_STRING);
    }
    if(count($catArr) == 5) {
      $this->addCat($catArr);
    } else {
      //Not enough data, can put a errorcode here
      echo 'Something is going wrong here. Please try again<br>' . PHP_EOL;
    }
  }

  //Add a cat to the database
  public function addCat($catArr) {
    //Create query
    $sql = "INSERT INTO cats (name, color, type, price, status) VALUES
                            (:name, :color, :type, :price, :status)";
    //Prepare
    $ask = $this->db->prepare($sql);
    //Bind values
    $ask->bindValue(':name', $catArr['name'], PDO::PARAM_STR);
    $ask->bindValue(':color', $catArr['color'], PDO::PARAM_STR);
    $ask->bindValue(':type', $catArr['type'], PDO::PARAM_STR);
    $ask->bindValue(':price', $catArr['price'], PDO::PARAM_STR);
    $ask->bindValue(':status', $catArr['status'], PDO::PARAM_STR);
    //Execute
    if ($ask->execute()) {
      //When execute returns OK item was added succesfully to the databes
      echo '<p>Succesfully added: ' . $catArr['name'] . ' to the database</p>';
    } else {
      //False, when execute encountered a error
      echo 'Something went wrong here | Error: ' . $ask->errorCode() . '<br>' . PHP_EOL;
    }
  }

}
?>
