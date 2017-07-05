<?php
//Create socket for client
  $socket = stream_socket_client('tcp://127.0.0.1:8082');
  //Do somethin while feof() is not empty
  while (!feof($socket)) {
    echo fread($socket, 100);
    echo 'Hello world';
  }
  //Close the socket
  fclose($socket);
  exit;
?>
