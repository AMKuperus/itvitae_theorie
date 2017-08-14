<?php

//Identify the request
//Identify by id and check wheter it is a id by checking digits
if(isset($_GET['id']) && ctype_digit($_GET['id'])) {
  $get = $_GET['id'];
  echo $get;
} else {
  echo 'Oops something went wrong here.';
}
