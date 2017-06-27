<?php

//If constant PHP_SESSION_NONE is the status of session_status there is no
//session yet and we start one
if(session_status() == PHP_SESSION_NONE) {
  session_start();
}

//Check if $_POST['reset'] is set, if yes unset and destroy the session,
//refresh the page and as extra use exit.
if(isset($_POST['reset'])) {
  session_unset();
  session_destroy();
  header('Refresh: 0');
  exit;
}

//Count number of visits to the page in $_SESSION['visit'], if isset count += 1,
//else make $_SESSION['visit'] and give it value of 1
if(isset($_SESSION['visit'])) {
  $_SESSION['visit'] += 1;
} else {
  $_SESSION['visit'] = 1;
}

//Show $_SESSION['visit']
echo 'Visited: ' . $_SESSION['visit'] . ' | SID: ' . session_id();

//Form to reset the session
echo  '<form method="POST">' .
      '<input type="submit" value="reset" name="reset">' .
      '</form>';

echo '<a href="http://127.0.0.1/itvitae_theorie/week5/week5.php">BACK to MAIN</a>';
?>
