<?php

$server = stream_socket_server('tcp://127.0.0.1:8082', $errno, $errorMessage);

if ($server === FALSE) {
  throw new UnexpectedValueException('Unable to bind socket: ' . $errorMessage);
}

for (;;) {
  $client = stream_socket_accept($server);

  if ($client) {

    fwrite($client, date('H:i:s'));
    stream_copy_to_stream($client, $client);
    fclose($client);
  }
}
