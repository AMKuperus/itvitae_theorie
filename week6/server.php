<?php
//Open a connection with stream_socket_server()
$server = stream_socket_server('tcp://127.0.0.1:8082', $errno, $errorMessage);
//Set a counter to count #visits
$count = 0;

//If server is not there spit out a error
if ($server === FALSE) {
  throw new UnexpectedValueException('Unable to bind socket: ' . $errorMessage);
}

//Accept a stream (from client)
for (;;) {
  $client = stream_socket_accept($server);
  //Count++
  $count++;
  //Apply a rot13 filter over all text that was written in this file
  //The input from client will stay clean and without filter
  //The filter works on fwrite() in the is-statement
  stream_filter_prepend($client, 'string.rot13');
  echo 'Connection @ ' . date('H:i:s') . ' | Visits: ' . $count . PHP_EOL;
  if ($client) {
    fwrite($client, 'Time: ' . date('H:i:s'));
    stream_copy_to_stream($client, $client);
    fclose($client);
  }
}
