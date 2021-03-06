<?php
//Controller
namespace Cat;

include 'Cat.class.php';
include 'CatView.class.php';
use \PDO;

class CatController {
  public $db;
  //TODO edit Cat??

  /**
   * Constructor sets the database property so we can use it inside this class.
   * @param Object $db  PDO database object.
   */
  public function __construct($db) {
    $this->db = $db;
  }

  /**
   * Show all the cats in a table.
   * @return Object   TableBuilder-object
   */
  public function viewCats(){
    //Get all the cats
    $arrCats = $this->getAllCats();
    //Calling static method showCatTable() from CatView with $arrCats
    CatView::showCatTable($arrCats);
    //CatView::showAddCatForm();
  }

  /**
   * View a cat by specific id, give a message if cat does not exist
   * @param  int      $id   Cat id
   * @return Object         CatView objec echo's to the screen OR @return string errormessage
   */
  public function viewCatById($id) {
    $catObj = $this->getCat($id);
    //Check if the cat_id exists
    if(is_bool($catObj)) {
      echo 'Oops, we don\'t seem to have this cat: ' . $id;
    } else {
      CatView::showCat($catObj);
    }
  }

  /**
   * Show the addCat-form
   * @return Object   FormBuilder object
   */
  public function viewAddCat() {
    //Calling static method showAddCatForm() from CatView
    CatView::showAddCatForm();
  }

  /**
   * Get a cat from the database
   * @param  String $id      Id of the cat to get info about.
   * @return Cat-object OR @return boolean if cat cannot be found in database.
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
    $result = $ask->fetch(PDO::FETCH_ASSOC);
    if(is_bool($result)) {
      return false;
    } else {
      $return = new Cat($result);
      return $return;
    }
  }

  /**
   * Get all the cats from the database.
   * @return Array Array filled with all Cat-objects available in teh database.
   */
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

  /**
   * Filter all the data from $_POSt[] and sanitize it. Sets all sanitized data
   * in $catArr[] and gives it to addCat()
   * @return Array Array containing sanitized cat data.
   */
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

  /**
   * Add a cat to the database.
   * @param Array   $catArr Array containing all the data to put into the database
   *                        belonging to this cat.
   */
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
