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
        //filter_var will only push the value if it is true to its filter
        //so if  you fill something else as a postcode (4 digits and 2 chars)
        //it will stay empty.
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $place = filter_var($_POST['place'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $bool = filter_var($_POST['bool'], FILTER_VALIDATE_BOOLEAN);
        $int = filter_var($_POST['int'], FILTER_VALIDATE_INT);
        $float = filter_var($_POST['float'], FILTER_VALIDATE_FLOAT);
        $ip = filter_var($_POST['ip'], FILTER_VALIDATE_IP);
        $mac = filter_var($_POST['mac'], FILTER_VALIDATE_MAC);
        $regexp = filter_var($_POST['regexp'], FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/^(?P<digits>\d{4})(?P<text>[a-zA-Z]{2}$)/']]);
        $url = filter_var($_POST['url'], FILTER_VALIDATE_URL);
        $char = htmlspecialchars($_POST['char']);
        echo '<pre>';
        var_dump($_POST['formArray']);
        echo '</pre>Hello ' . $name . ' from ' . $place . '<br>' .
              '| Int: ' . $int . '| Float: ' . $float . '<br>' .
              '| Ip: ' . $ip . '| Mac: ' . $mac . '<br>' .
              '| Postcode' . $regexp . '| Email: '. $email . '<br>' .
              '| URL: ' . $url . '| Boolean: ' . $bool . '<br>' . PHP_EOL;
        echo 'Specialchars: ' . $char . '<br>' . PHP_EOL;
      }

      function showForm() {
        echo '<form action="post.php" method="POST">' .
              '<fieldset>' .
                '<legend>Example for sending forms with POST</legend>' .
                  '<p>Name: <input type="text" name="name"></p>' .
                  '<p>Place: <input type="text" name="place"></p>' .
                  '<p>Email: <input type="text" name="email"></p>' .
                  '<select name="bool">' .
                    '<option value="true">True</option>' .
                    '<option value="false">False</option>' .
                  '</select>' .
                  '<p>Int: <input type="text" name="int"></p>' .
                  '<p>Float: <input type="text" name="float"></p>' .
                  '<p>Ip: <input type="text" name="ip"></p>' .
                  '<p>Mac: <input type="text" name="mac"></p>' .
                  '<p>Postcode(NL): <input type="text" name="regexp"></p>' .
                  '<p>Url: <input type="text" name="url"></p>' .
                  '<p>Char: <input type="text" name="char"></p>' .
                  '<p>Text: <input type="textarea" name="formArray[]"></p>' .
                  '<p>Text: <input type="textarea" name="formArray[]"></p>' .
                  '<input type="submit" value="send">' .
                '</fieldset>' .
              '</form>';
      }
      echo '<a href="' . $baseurl . '/itvitae_theorie/week5/week5.php">BACK to MAIN</a>';

      ?>
</body>
</html>
