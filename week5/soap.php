<?php
include 'config.inc.php';

//Soap
$wsdl = 'https://ws1.webservices.nl/soap_doclit?wsdl';

try {
  $soap = new SoapClient($wsdl);
  $soap->__getFunctions();
  $header = new SoapHeader( 'http://www.webservices.nl/soap/',
                            'HeaderLogin',
                            ['username' => $WSusername, 'password' => $WSpassword],
                            true);
  $soap->__setSoapHeaders($header);
  $data = $soap->addressReeksPostcodeSearch(['address' => '1091GR150']);
} catch(Exception $e) {
  die($e->getMessage());
}
var_dump($data);
echo '<hr>' . $data->out->huisnr_van . '<br>' . PHP_EOL;
echo '<a href="' . $baseurl . '/itvitae_theorie/week5/week5.php">BACK to MAIN</a>';
?>
