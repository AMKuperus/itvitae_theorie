<?php
  header('Content-type: application/pdf');
  header('Content-Disposition: attachment;filename="file.pdf"');
  readfile('test.pdf');
?>
