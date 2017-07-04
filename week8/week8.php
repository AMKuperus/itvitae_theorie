<?php
//TODO JSON
  //TODO Bouw je applicatie van vorige week verder uit met een webservice om
  //JSON-data uit 1 of meerdere tabellen te tonen op het scherm met json_encode()
  //TODO Experimenteer ook met alle options voor json_encode zoals op bladzijde
  //181 staan van het boek
  //TODO Maak 1 simpele klasse die de JsonSerializable implementeert en data uit
  //je database in JSON formaat weergeeft wanneer de json_encode wordt uitgevoerd
  //met een object van de klasse.
  //TODO Pas de json_decode functie op bovenstaande pagina’s, waarbij je 1 keer de
  //tweede argument (bij assoc) op true zet en bij de andere op false (default)
  //TODO Maak expres een fout in JSON zodat je de fout kan uitlezen met de
  //json_last_error en json_last_error_msg functies

//TODO DateTime
  //TODO Experimenteer met 2 verschillende datetime-zones; in je php.ini bij
  //date.timezone en via date_default_timezone_set. Toon aan dat je met beide
  //timezones andere resultaat krijgt op het scherm.
  //TODO Haal datum/tijden op uit je database en geef deze mee aan een DateTime
  //object via setDate()-methode. Roep vervolgens de format()-methode aan om de
  //datum/tijd op het scherm te tonen.
  //TODO Haal datum/tijden op uit je database en geef deze mee aan een
  //DateTimeImmutable object; beschrijf het verschil met DateTime. Roep vervolgens
  //de format()-methode aan om de datum/tijd op het scherm te tonen; pas meerdere .
  //TODO Pas de date(), mktime(), strtotime() en time() functies toe in combinatie
  //methet DateTime object. Roep vervolgens de format()-methode aan om de datum/tijd
  //op het scherm te tonen en experimenteer met verschillendeformaten
  //TODO Pas ook de microtime() functie toe
  //TODO Voeg 1 dag en 8 uur toe aan een datum/tijd dmv de add()-methode
  //TODO Vergelijk 2 datum/tijden met elkaar
  //TODO Vraag de unix-timestamp op van een datum/tijd
  //TODO Pas een datum/tijd aan via de modify()-methode

//TODO XML
  //TODO Maak zelf een XML-bestand met meerdere XML-nodes of pak een bestaande
  //van internet (Bijv bij https://msdn.microsoft.com/en-us/library/ms762271(v=vs.85).aspx)
  //TODO Laad deXML-bestand in met behulp van Simple XML
  //TODO Loop met for/foreach door de XML-data heen en laat de waardes van enkele
  //child nodes en de attributen zien
  //TODO Voeg een node child en attribuut toe bij alle rijen
  //TODO Toon de XML nu op het scherm met asXML()
  //TODO Doe bovenstaande 4 stappen ook met DomDocument. Sla het bestand ook op als een nieuw XML-bestand.
  //TODO Maak een XML parser met xml_parser_create via de procedural manier en/of
  //de object georiënteerde manier. Zie https://php-and-symfony.matthiasnoback.nl/2012/04/php-create-an-object-oriented-xml-parser-using-the-built-in-xml_-functions/
  //voor een tutorial.

//TODO SOAP
  //TODO Maak de SOAP-server en SOAP-client uit het boek

//TODO REST
  //TODO Maak een REST webservice welke via GET en  ( POST of PUT of DELETE )
  //te benaderen is.
?>
