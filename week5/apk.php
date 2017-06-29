<?php
include 'config.inc.php';

//Checking if POST holds data, if so doing something with it.
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  reviewForm();
} else {
  showForm();
}

function reviewForm() {
  //Create correct format of string for json call trimming - and making everything uppercase
  $plate = strtoupper(strtr(trim(filter_var($_POST['plate'], FILTER_SANITIZE_STRING)), ['-' => '', ' ' => '']));
  if(strlen($plate) == 6 && preg_match('/[A-Z0-9]{6}/',$plate)){
    echo getApk($plate);
  } else {
    echo 'The entered licenseplate: ' . $plate . ' does not meet the criteria. Please try again.';
    showForm();
  }
}

//Get apk request for $plate
function getApk($plate) {
  //Make request url to rdw with $plate Step 1: create url
  $url = 'https://opendata.rdw.nl/resource/uxre-t94a.json?kenteken=' . $plate;
  //Step 2. get json contents
  $json = file_get_contents($url);
  //STep 3. decode json
  $result = json_decode($json);
  //var_dump($result);
  //TODO only return if there is someting to return, and say nothing to return if result is empty
  return  'Kenteken: ' . $result[0]->kenteken .
          ' | APK geldig tot: ' . $result[0]->vervaldatum_keuring . '<br>' . PHP_EOL;
}

function showForm() {
  echo '<form action="apk.php" method="POST">' .
        '<fieldset>' .
          '<legend>Request APK date for dutch registered cars</legend>' .
            '<p>Licenseplate: <input type="text" name="plate"></p>' .
            '<input type="submit" value="send">' .
          '</fieldset>' .
        '</form>';
}

echo '<a href="' . $baseurl . '/itvitae_theorie/week5/week5.php">BACK to MAIN</a>';

?>
