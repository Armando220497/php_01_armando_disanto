<?php


// Selfwork PHP 1

// Definizione delle variabili
$intero = 42; // Integer
$decimale = 3.14; // Float
$stringa = "Ciao, mondo!"; // String
$booleano = true; // Boolean

var_dump($intero);
var_dump($decimale);
var_dump($stringa);
var_dump($booleano);



// Costanti
const INTERO = 42;
const DECIMALE = 3.14;
const STRINGA = "Ciao, mondo!";
const BOOLEANO = true;


var_dump(INTERO);
var_dump(DECIMALE);
var_dump(STRINGA);
var_dump(BOOLEANO);





// Selfwork PHP 2

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = "$text2";
$text7 = "bevuto";
$text8 = "tutto";


// Concatenazione  “Marco Hai sete? Perche' hai bevuto tutto.“

echo $text1 . " " . $text2 . " " . $text3 . " " . $text4 . " " . $text5 . " " . $text2 . " " . $text7 . " " . $text8;
