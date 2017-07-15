<?php
//OOP

//TODO Declareer een PHP class met de methode ‘helloWorld’ die de string "Hello
//World" toont op het scherm met een enter er achter (<br>). Maak een object
//van de class en voer de methode uit.

//TODO Pas de PHP class aan en voeg zowel een constructor en destructor toe welke
//ook dezelfde methode aanroepen mbv $this. Uiteindelijk krijg je dus 3 keer de
//tekst op het scherm krijgen.

//TODO Pas de helloWorld-methode aan en geef de mogelijkheid om argumenten mee te
// geven. Wanneer er geen argument is, wordt er “Hello World” getoond, en anders
// “Hello” met het argument er achter.

//TODO Maak een PHP calculator class waarbij je 2 waarden als argument kan meegeven,
//en vervolgens methodes kan aanroepen om de de uitkomst te laten zien van het
//optellen, aftrekken, vermenigvuldigen en delen van de waarden.

//TODO Declareer een subclass van de PHP calculator class genaamd DefectiveCalculator
//waarbij de methode van optellen wordt overgeschreven door de parent-methode van
//aftrekken; en vice-versa.

//TODO Voeg ook een methode toe aan deze subclass om de naam van de class en method
//op het scherm te tonen via de PHP-keywords hiervoor.

//TODO Roep de methodes van de subclass via een andere methode dynamisch aan via
//de $obj->$var() en $obj->{expression}() syntax. Daarnaast maak een object van
//de class dynamisch aan ala (new myClass)->callMyFunction(123).

//TODO Maak een class aan waarbij je alle 4 de visibility-opties toepast bij properties
//of methods: public, protected, private en final.

//TODO Pas een Constant toe in een class en echo de constante zowel binnen als
//buiten de class

//TODO Neem de code over & de uitleg door over static op de volgende websites:
//http://chipersoft.com/p/PHP-many-meanings-of-static/o
//https://www.leaseweb.com/labs/2014/04/static-versus-self-php/

//TODO Declareer een StaticCalculator class aan met static methods voor het optellen
//en aftrekken. Voer de methodsook uit zonder een object aan te maken.

//TODO Declareer een abstracte class aan waarin je de abstracte methods voor een
//Calculator class definieert. Maak in dezelfde abstracte class ook een public
//method aan die de abstracte methods uitvoert.

//TODO Declareer een class die de bovenstaande abstracte class overerft en invult.

//TODO Declareer een Interface voor de Calculator waarin je specificeert welke
//methods geïmplementeerd moeten worden

//TODO Declareer een tweede Interface en laat 1 class beide interfaces implementeren

//TODO Controleer in een method met de instanceof keyword of een class beide
//interfaces heeft geimplementeerd.

//TODO De magic methods __construct & __destruct zijn eerder toegepast bij 1 van
//de opdrachten; pas ook de volgende magic methods toe in 1 van je classes:
//__get(), __set(), __isset(), __empty(), __call(), __callStatic(), __clone(),
//__sleep(), __wakeup(), __set_start(), __toString(), __debugInfo()

//TODO Maak een anonieme class met minimaal 1 methode; toon aan dat deze werkt

//TODO Pas Lazy Loading toe om automatisch classes in te laden

//TODO Pas de ReflectionClass toe op 1 van je classes (waarbij je commentaar
//gebruikt) en beschrijf hiermee automatisch je class en methods.

//Closures & Calbacks

//TODO Doorloop de stappen voor anonieme functies, closures & callbacks op deze
//website: http://www.elated.com/articles/php-anonymous-functions/


//TODO Doorloopt de stappen voor closures op deze website:
//https://www.phphulp.nl/php/tutorial/php-functies/php-53-closures/631/

//TODO Experimenteer met closures waarbij je variabelen toe past, variabelen via
//een reference en ook $this keyword.

//TODO Maak 1 class waarbij je via het $this keyword verwijst naar een niet-
//bestaande method & niet-bestaande property in die class. Maak vervolgens
//een nieuwe class aan met de method & property die nog niet bestaan. Koppel
//deze classes via een closure en de bindTo-methode.

//TODO Doe bovenstaande, alleen dan met de statische bind-methode

//TODO In PHP7 is Closure:call() toegevoegd als vervanging van bindTo. Laat zien
//hoe deze werkt

//TODO Pas je eigen callback functie toe in 1 van de array-functies, bijv usort

//TODO Declareer een class met een __invoke() methode en gebruik deze ook in de
//array-functie hierboven

//Traits

//TODO Definieer een Trait en pas deze toe in een class

//TODO Definieer 2 Trait’s en gebruik deze in een andere Trait

//TODO Defineer 2 Traits met diverse methodes; defineer een class met dezelfde
//methodes en pas de Trait ook toe. Beschrijf welke methode voorrang heeft

//TODO Defineer 2 Traits met dezelfde methode; probeer deze toe te passen. Los de
//fatal error op met insteadof

//TODO Maak 2 aliassen van diverse methodes uit 1 van de eerdere Traits

//TODO Implementeer de Iterator interface

//TODO Experimenteer met 2 andere Iterators (SeekableIterator, RecursiveIteratorIterator,
//FilterInterator, CallbackFilterInterator, LimitIterator, CachingIterator, MultipleIterator,
//of RecursiveTreeIterator )

//TODO Maak een functie met een for-loop waarbij je de yield-keyword toe past
?>
