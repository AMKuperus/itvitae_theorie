<?php
include 'config.inc.php';

//WSDL is the start string of the webservice to use with soap
$wsdl = 'https://ws1.webservices.nl/soap_doclit?wsdl';

try {
  //Make soap object
  $soap = new SoapClient($wsdl);
  $soap->__getFunctions();
  //Make soap header
  $header = new SoapHeader( 'http://www.webservices.nl/soap/',
                            'HeaderLogin',
                            ['username' => $WSusername, 'password' => $WSpassword],
                            true);
  //Set soap header
  $soap->__setSoapHeaders($header);
  //Do a requst on a function and save it to $data
  $data = $soap->addressReeksPostcodeSearch(['address' => '1091GR150']);
} catch(Exception $e) {
  //Stop application on errors
  die($e->getMessage());
}
var_dump($data);
echo '<hr>' . $data->out->huisnr_van . '<br>' . PHP_EOL;
echo '<a href="' . $baseurl . '/itvitae_theorie/week5/week5.php">BACK to MAIN</a>';
?>
