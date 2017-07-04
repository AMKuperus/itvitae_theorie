<?php
  $socket = stream_socket_client('tcp://127.0.0.1:8082');
  while (!feof($socket)) {
    echo fread($socket, 100);
    echo 'Hello world';
  }
  fclose($socket);
?>
