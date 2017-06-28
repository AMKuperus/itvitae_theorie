<!DOCTYPE html>
<head>
  <title>Sending forms with POST</title>
</head>
<body>
      <?php
      //Checking if POST holds data, if so doing something with it.
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        reviewForm();
      } else {
        showForm();
      }

      function reviewForm() {
        $name = $_POST['name'];
        $place = $_POST['place'];
        echo 'Hello ' . $name . ' from ' . $place . '.<br>' . PHP_EOL;
      }

      function showForm() {
        echo '<form action="post.php" method="POST">' .
              '<fieldset>' .
                '<legend>Example for sending forms with POST</legend>' .
                  'Name: <input type="text" name="name" required>' .
                  'Place: <input type="text" name="place" required>' .
                  '<input type="submit" value="send">' .
                '</fieldset>' .
              '</form>';
      }
      ?>
</body>
</html>
