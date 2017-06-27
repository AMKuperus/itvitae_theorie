<?php
//Set a cookie that expires after 30 minutes
//Serialize() generates a storable representation of a value, needs to be
//unserialize() to be usable again(unpack)
setcookie('cookie', serialize('yumm'), time()+1800);
//Bake a raw cookie {raw cookie is cookie witgout urlencoding}
//Use rawurlencode to make sure all browsers encode spaces correct
setrawcookie('dough', rawurlencode('meh'), time()+1800);
//Pas de header functie toe zoals in de voorbeelden van
//https://www.w3schools.com/php/func_http_header.asp
//see index.php for redirect
//Another good explenation on headers is found here:
//http://www.nicholassolutions.com/tutorials/php/headers.html

//Turning off caching with header()
#Commented out cause of conflict with SESSION
#header('Cache-Control: no-cache, no-store, must-revalidate');
#header('Expires: Sun, 01 Jul 2005 00:00:00 GMT');
#header('Pragma: no-cache');

echo '<a href="http://127.0.0.1/itvitae_theorie/week5/pdf.php" target="_blank">
      CLICK ME TO SEE A PDF</a><br>' . PHP_EOL;

//Experimenteer met sessies; de session_start, session_destroy, session_id
//-functies en de $_SESSION variable
echo '<a href="http://127.0.0.1/itvitae_theorie/week5/session.php">SESSIONS</a><br>' . PHP_EOL;

//Experimenteer met cookies; setcookie-& setrawcookie-functies. Roep de
//waarden uit het cookie aan via de $_COOKIE en $_REQUEST variabelen
//Pas bij sessies of cookiees ook de serialize & unserialize-functies toe


//$_REQUEST is bad practice to use because if you need to call variables by use
//of $_REQUEST you do not know where it comes from, better figure out where to get
//variable from then use a bad practice method(it is even nowadays turned off in
//php.ini because it is a vulnerability)

//Grabbing baked cookie, cookie will only be rechable after page has refreshed
//and cookie has baked itself(if user permnits cookies)
if(!isset($_COOKIE['cookie'])){
  echo 'No cookies in the jar<br>' . PHP_EOL;
} else {
  //With unserialize() we make sure the value is human-readable
  echo 'Cookie value: ' . unserialize($_COOKIE['cookie']) . '<br>' . PHP_EOL;
}

//Grabbing raw cookie, cookie will only be rechable after page has refreshed and
//cookie has baked itself(if user permnits cookies)
if(!isset($_COOKIE['dough'])) {
  echo 'Cookie needs baking<br>' . PHP_EOL;
} else {
  echo 'Raw cookie: ' . $_COOKIE['dough'] . '<br>' . PHP_EOL;
}

//TODO Maak een formulier in HTML aan die met een POST-methode data stuurt naar
//een PHP-script

//TODO Maak een formulier in HTML aan die met een GET-methode data stuurt naar
//een PHP-script

//TODO Zet in een HTML-formulier 2 tekstvakken neer waar de naam een array is
//(Bijv. <input name="FormArray[]">) en lees de waarden van het tekstvak uit in
//een PHP-script.

//Controleer met een HTML-formulier of je data kan uitlezen via de $_REQUEST
//variable.
echo '<code>If $_REQUEST is activated this should be possible if either POST or
      GET is used,however is is a stupid thing to do since you would have to turn
      the function on in php.ini and it is nowadays turned off cause it is a
      vulnerability-risk. Also, when using a html-form you specified method in
      first line of the form so should know what to use (POST or GET)</code><br>';

//TODO Pas de htmlspecialchars-functie toe in 1 van je bovenstaande PHP-scripts

//TODO Pas ook de urlencode-functie toe in een hyperlink met een variabele die
//afkomstig is uit een HTML-formulier. Zie ook de PHP.net documentatie voor extra
//toelichting

//TODO Pas in een HTML-formulier & PHP-script de filter_var-functie toe met alle
//Validate filters, Sanitize filters en overige filters.

//TODO Bouw een script dat een array omzet naar JSON of XML, en dit op het scherm
//toont

//TODO Bouw een script dat JSON-data of XML-data uitleest en toont op het scherm
//als normale tekst.

//TODO Bouw een webservice voor je casus-opdracht om data te consumeren en data
//te posten in JSON of XML

//TODO Zoek een webservice uit die via SOAP werkt en roep deze aan via je PHP-script

//TODO Pas een API toe van https://openweathermap.org/api, http://opendata.rdw.nl/
//of andere open-data API toe
?>