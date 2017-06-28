<!DOCTYPE html>
<head>
  <title>Sending forms with POST</title>
</head>
<body>
      <?php
      include 'config.inc.php';
      //Checking if GET has 'send', if so doing something with it.
      if(isset($_GET['send'])) {
        reviewForm();
      } else {
        showForm();
      }

      function reviewForm() {
        $name = $_GET['name'];
        $place = $_GET['place'];
        echo 'Hello ' . $name . ' from ' . $place . '.<br>' . PHP_EOL;
      }

      function showForm() {
        echo '<form action="get.php" method="GET">' .
              '<fieldset>' .
                '<legend>Example for sending forms with GET</legend>' .
                  'Name: <input type="text" name="name" required>' .
                  'Place: <input type="text" name="place" required>' .
                  '<input type="submit" value="send" name="send">' .
                '</fieldset>' .
              '</form>';
      }

      echo '<a href="' . $baseurl . '/itvitae_theorie/week5/week5.php">BACK to MAIN</a>';
      ?>
</body>
</html>
