<!DOCTYPE html>
<head>
  <title>Sending forms with POST</title>
</head>
<body>
      <?php
      include 'config.inc.php';
      //Checking if POST holds data, if so doing something with it.
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        reviewForm();
      } else {
        showForm();
      }

      function reviewForm() {
        $name = $_POST['name'];
        $place = $_POST['place'];
        $char = htmlspecialchars($_POST['char']);
        echo '<pre>';
        var_dump($_POST['formArray']);
        echo '</pre>Hello ' . $name . ' from ' . $place . '.<br>' . PHP_EOL;
        echo 'Specialchars: ' . $char . '<br>' . PHP_EOL;
      }

      function showForm() {
        echo '<form action="post.php" method="POST">' .
              '<fieldset>' .
                '<legend>Example for sending forms with POST</legend>' .
                  'Name: <input type="text" name="name" required>' .
                  'Place: <input type="text" name="place" required>' .
                  'Char: <input type="text" name="char">' .
                  'Text: <input type="textarea" name="formArray[]">' .
                  'Text: <input type="textarea" name="formArray[]">' .
                  '<input type="submit" value="send">' .
                '</fieldset>' .
              '</form>';
      }
      echo '<a href="' . $baseurl . '/itvitae_theorie/week5/week5.php">BACK to MAIN</a>';

      ?>
</body>
</html>
