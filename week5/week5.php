<?php

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
echo '<a href="http://127.0.0.1/itvitae_theorie/week5/session.php">SESSIONS</a>';

//TODO Experimenteer met cookies; setcookie-& setrawcookie-functies. Roep de
//waarden uit het cookie aan via de $_COOKIE en $_REQUEST variabelen

//TODO Pas bij sessies of cookiees ook de serialize & unserialize-functies toe

//TODO Maak een formulier in HTML aan die met een POST-methode data stuurt naar
//eenPHP-script

//TODO Maak een formulier in HTML aan die met een GET-methode data stuurt naar
//een PHP-script

//TODO Zet in een HTML-formulier 2 tekstvakken neer waar de naam een array is
//(Bijv. <input name="FormArray[]">) en lees de waarden van het tekstvak uit in
//een PHP-script.

//TODO Controleer met een HTML-formulier of je data kan uitlezen via de $_REQUEST
//variable.

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
