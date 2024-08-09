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

echo "\n\n";






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

echo "\n\n";


// Selfwork PHP 3 

// Stampa Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita

$words1 = [

    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
    [
        'oscura,',
        'era',
        89,
        [
            'mezzo',
            'E'
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['fortuna']
    ],
    'fine' => '!'
];

$words3mancanti = [
    'Nel',
    'di',
    'cammin',
    'nostra',
    'vita',
    'una',
    'selva',
    "che'",
    'la',
    'via',
    'smarrita',
];

$results = $words3mancanti[0] . ' ' . // 'Nel'
    $words1[6][3][0] . ' ' . // 'mezzo'
    $words3mancanti[1] . ' ' . // 'di'
    $words3mancanti[2] . ' ' . // 'cammin'
    $words3mancanti[3] . ' ' . // 'nostra'
    $words3mancanti[4] . ' ' . // 'vita'
    $words1[4] . ' ' . // 'mi'
    $words1[6][4] . ' ' . // 'ritrovai'
    $words1[6][5] . ' ' . // 'per'
    $words3mancanti[5] . ' ' . // 'una'
    $words3mancanti[6] . ' ' . // 'selva'
    $words1[6][0] . ' ' . // 'oscura,'
    $words3mancanti[7] . ' ' . // "che'"
    $words3mancanti[8] . ' ' . // 'la'
    $words1[7] . ' ' . // 'diritta'
    $words3mancanti[9] . ' ' . // 'via'
    $words1[6][1] . ' ' . // 'era'
    $words3mancanti[10]; // 'smarrita'


echo $results;
