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
  //echo $dir .  $file['name'] .'<hr>' . PHP_EOL;
  //Check if the file already exists
  if(!file_exists($dir .  $file['name'])) {
    $data = [' |Name: ' . $file['name'], ' |Type: ' . $file['type'], ' |Size: ' . $file['size']];
    //Save a .txt file with the data array in uploads dir named originalfilename.mimetype.txt
    file_put_contents($dir . $file['name'] . '.txt', $data);
    //Move the file from tmp to uploads (Normally it would be better to change
    //the filename as security measure)
    move_uploaded_file($file['tmp_name'], $dir . $file['name']);
    echo 'File succesfully uploaded!';
  } else {
    //If the file already exists according to file_exists give a error
    echo 'Error: the file already exists';
  }
}

echo '<hr>' . PHP_EOL;
date_default_timezone_set('Europe/Amsterdam');
//Maak een tekstbestand aan via de f*-functies (zoals fopen, etc). Bewerk
//dit tekstbestand later in de code; voeg ‘Last edited on <datum>’ toe aan het
//einde van het bestand. Toon vervolgens de inhoud van het bestand op het scherm.
//open file with fopen, if it does not exist it will be created.
//Pointer at end of file, appending file with a string with a date-time.
$file = fopen('testfile.txt', 'a') or die('Unable to open file');
fwrite($file, 'Last edited on ' . date('D j F Y H:i:s') . "<br>\r\n");
//fputs() is the alias for fwrite()
//fputs($file, 'Last edited on ' . date('D j F Y H:i:s') . "<br>\r\n");
fclose($file);

//Open the .txt file and print it to the screen
$file2 = fopen('testfile.txt', 'r') or die('Unable to read stream.');
echo fread($file2, filesize('testfile.txt'));
fclose($file2);

echo '<hr>' . PHP_EOL;

//Vraag de inhoud van het tekstbestand op via de file_get_content-functie,
//en overschrijf de inhoud met de file_put_content-functie
//Calling file with file_get_contents()
$fgc = file_get_contents('testfile.txt');
//Appending file with file_put_contents()
file_put_contents('testfile.txt', '-Appending string-', FILE_APPEND);
echo $fgc;

echo '<hr>' . PHP_EOL;

//Maak een PHP-script aan om in een CSV-bestand een array te schrijven
$cars = ['Saab', 'Ferrari', 'Ford', 'Opel', 'BMW', 'Mini', 'Fiat', 'Renault', 'Aston Martin'];
$file = fopen('file.csv', 'w+');
fputcsv($file, $cars);
fclose($file);

//Pas de fpassthru en fprintf-functies toe
//fpassthru() outputs all remaining data from handle ($f())
$f = fopen('file.csv', 'r');
fpassthru($f);
fclose($f);

//fprintf() writes formated data to a file (file-write + sprinf combined)
if(!$fp = fopen('fprint.txt', 'a+')) {
  return;
}
//Let's have a cup of coffe on <today>
$string = "%d cup of coffee on %s\r\n";
$count = 1;
$date = date('l');
fprintf($fp, $string, $count, $date);
fclose($fp);

echo '<hr>' . PHP_EOL;

//Pas de file operation functies toe: chdir, chroot, readdir, rmdir, basename,
//chmod, copy, file_exists, fputs, rename, unlink. Beschrijf in commentaar welke
//functies niet werkten.
echo 'Current working directory: ' . getcwd() . '<br>' . PHP_EOL;
chdir('uploads');
echo 'New working directory: ' . getcwd() . '<br>' . PHP_EOL;

//chroot() This function is only available to GNU and BSD systems, and only when
//using the CLI, CGI or Embed SAPI. Also, this function requires root privileges.
//This function is not implemented on Windows platforms.
#chroot('htdocs');
#echo getcwd();
$dir = '../';

//Is it a directory?
if(is_dir($dir)) {
  //if yes, open the directory with opendir()
  if($d = opendir($dir)) {
    //Loop trough the directory
    while (($file = readdir($d)) !== FALSE) {
      //for mime_content_type() in windows turn on php_fileinfo.dll in php.ini and reboot server
      echo ' | Filename: ' . $file . ' | Filetype: ' . mime_content_type($dir . $file) . '<br>' . PHP_EOL;
    }
    //Close directory
    closedir($d);
  }
} else {
  echo 'Not a dir<br>' . PHP_EOL;
}

//if the directory excosts create it with mkdir()
if(!is_dir('./temp')) {
  mkdir('./temp', 0777, FALSE);
  echo 'Created directory';
}

//Remove a directory wir rmdir()
if(file_exists('./temp')) {
  rmdir('./temp');
  echo 'Removed directory';
}

echo '<br>' . PHP_EOL;

//copy() (.bak stands for a backupfile)
if(!copy('../fprint.txt', '../uploads/fprint.txt.bak')) {
  echo 'Failed to copy file';
} else {
  echo 'Succesfully made backup for fprint.txt';
}

echo '<br>' . PHP_EOL;

//rename() renames a directory from old to new name
if(file_exists('../file.csv')) {
  rename('../file.csv', '../uploads/my_file.csv');
  echo 'Good job!';
} else {
  echo 'Not working';
}

//unlink() deletes a file
#unlink('../uploads/fprint.txt.bak');

echo '<br>' . PHP_EOL;

//echo basedirectory
echo basename('itvitae_theorie/week6/week6.php') . '<br>' . PHP_EOL;

//chmod change read/write chmod settings for a file
//Only works on unix-systems
chmod('../testfile.txt', 0777);
//return file permissions in octal chmod code
echo 'Chmod: ' . substr(sprintf('%o',fileperms( '../testfile.txt')), -4) . '<br>' . PHP_EOL;

echo '<hr>' . PHP_EOL;

//Pas deze functies toe om een bestand/map na te checken: is_dir, is_executable,
//is_file, is_link, is_readable, is_writable, is_uploaded_file.

//is_executable()
if(!is_executable('../fprint.txt')) {
  echo 'Not executable';
} else {
  echo 'Executable';
}

echo '<br>' . PHP_EOL;

//is_file()
if(!is_file('../fprint.txt')) {
  echo 'Not a regular file';
} else {
  echo 'A regular file';
}

echo '<br>' . PHP_EOL;

//is_link()This does not work on windows?
//Mac os x commands to create link:
//MacBook-Pro-3:htdocs User$ ln -s favicon.ico favicon_link.ico
//MacBook-Pro-3:htdocs User$ ls -al
if(!is_link('../../../favicon_link.ico')) {
  echo 'Not a link';
} else {
  echo 'Chain me...';
}

echo '<br>' . PHP_EOL;

//is_readable()
if(!is_readable('../fprint.txt')) {
  echo 'Not readable';
} else {
  echo 'Can read this';
}

echo '<br>' . PHP_EOL;

//is_writable()
if(!is_writable('../fprint.txt')) {
  echo 'Not writable';
} else {
  echo 'Writable';
}

echo '<br>' . PHP_EOL;

//is_uploaded_file()
if(!is_uploaded_file('../fprint.txt')) {
  echo 'Not uploaded';
} else {
  echo 'Uploaded';
}


echo '<br>' . PHP_EOL;


//clear the cache for is_link() because that is a cached function.
clearstatcache();

echo '<br>' . PHP_EOL;


echo '<hr>' . PHP_EOL;
//Haal een webpagina op met je eigen PHP script.
//In order to make this work you need to turn on allow_url_include=On in php.ini
//This only loads the pgae given, and not the scripts that are linked inside like
//JavaScript and css.
#include ('http://www.amkuperus.nl/test/121.html');
//Also possible to get webpage with file_get_contents(), which will also not load
//linked files
echo file_get_contents('http://www.amkuperus.nl/test/121.html');

echo '<hr>' . PHP_EOL;

//Vraag informatie over een bestand op via de finfo_open en finfo_file functies
$finfo = new finfo(FILEINFO_MIME);

$filename = '../fprint.txt';
echo $finfo->file($filename);

echo '<hr>' . PHP_EOL;

//Maak een simpele client/server applicatie met de stream_socket_server en
//stream_socket_client functies.
//Pas stream filters toe in je client/server applicatie.
?>
