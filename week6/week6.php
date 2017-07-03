<?php
// Maak een HTML-formulier aan waarmee je bestanden kan uploaden naar een
//PHP-script. Zorg dat je met het PHP-script de client-side bestandsnaam, de
//mime-type en file-size uitleest en in een bestand zet met dezelfde bestandsnaam,
//alleen dan met .txt op het einde als extensie.
echo '<form action="week6.php" method="POST" enctype="multipart/form-data">' .
        '<fieldset>' .
          '<p>File: <input type="file" name="file">' .
          '<input type="submit" value="submit">' .
        '</fieldset>' .
      '</form>';

//Uploading a file to uploads directory from form
//WARNING: This is not the best way to save uploads, as for uploads it would be
//better to also check things like filesize and corresponding mime-type so there
//is less chance to get bad files
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $file = $_FILES['file'];
  //Build the directory string
  $dir = 'uploads/';
  echo $dir .  $file['name'] .'<hr>' . PHP_EOL;
  //Check if the file already exists
  if(!file_exists($dir .  $file['name'])) {
    $data = [' |Name: ' . $file['name'], ' |Type: ' . $file['type'], ' |Size: ' . $file['size']];
    //Save a .txt file with the data array in uploads dir named originalfilename.mimetype.txt
    file_put_contents($dir . $file['name'] . '.txt', $data);
    //Move the file from tmp to uploads
    move_uploaded_file($file['tmp_name'], $dir . $file['name']);
    echo 'File succesfully uploaded!';
  } else {
    //If the file already exists according to file_exists give a error
    echo 'Error: the file already exists';
  }
}

//TODO Maak een tekstbestand aan via de f*-functies (zoals fopen, etc). Bewerk
//dit tekstbestand later in de code; voeg ‘Last edited on <datum>’ toe aan het
//einde van het bestand. Toon vervolgens de inhoud van het bestand op het scherm.

//TODO Vraag de inhoud van het tekstbestand op via de file_get_content-functie,
//en overschrijf de inhoud met de file_put_content-functie

//Maak een PHP-script aan om in een CSV-bestand een array te schrijven
$cars = ['Saab', 'Ferrari', 'Ford', 'Opel', 'BMW', 'Mini', 'Fiat', 'Renault', 'Aston Martin'];
$file = fopen('file.csv', 'w+');
fputcsv($file, $cars);
fclose($file);

//TODO Pas de fpassthru en fprintf-functies toe

//TODO Pas de file operation functies toe: chdir, chroot, readdir, rmdir, basename,
//chmod, copy, file_exists, fputs, rename, unlink. Beschrijf in commentaar welke
//functies niet werkten.

//TODO Pas deze functies toe om een bestand/map na te checken: is_dir, is_executable,
//is_file, is_link, is_readable, is_writable, is_uploaded_file.

//Haal een webpagina op met je eigen PHP script.
//In order to make this work you need to turn on allow_url_include=On in php.ini
//This only loads the pgae given, and not the scripts that are linked inside like
//JavaScript and css.
#include ('http://www.amkuperus.nl/test/121.html');

//TODO Vraag informatie over een bestand op via de finfo_open en finfo_file functies

//TODO Maak een simpele client/server applicatie met de stream_socket_server en
//stream_socket_client functies.

//TODO Pas stream filters toe in je client/server applicatie.

?>
