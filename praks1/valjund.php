<?php
/**
 * Created by PhpStorm.
 * User: jaanikamy
 * Date: 08.02.2018
 * Time: 12:50
 */
// üherealine kommenraar
/*
 * mitme
 * realine
 * kommentaar
 */
// väljastamine
echo 'Aine - Veebiprogrammeerimine'.'<br />'; // käsu lõpp - ;
print 'valikaine<br />';
// muutujate defineerimine
$eesNimi = 'Jaanika'; // eesnimi, string
$pereNimi = 'Müürisepp'; // perenimi , string
$bussiNumber = 4; // bussi number, integer
$soiduKestvus = 0.5; // sõidu kestvus, 0.5 tundi, float
// konstandite defineerimine
define('NUMBER_PI', 3.14);
// Kasutades eel defineeritud muutujad ja konstandid
// väljasta ilusa teksti
echo 'Olen '.$eesNimi.' '.$pereNimi.'<br />';
echo 'Sõidan koolist kesklinna bussiga number '.$bussiNumber.'<br />';
echo 'Jõuan kesklinna '.$soiduKestvus.' tunniga<br />';
echo 'Midagi konstantset? PI = '.NUMBER_PI.'<br />';
// tingimuslaused
$ilmValjas = 'päike paistab';
if($ilmValjas == 'sajab lund'){
    echo 'Tuleb minna sauna<br />';
} else {
    echo 'Pole mõtet sauna minna<br />';
}
// ? operaator - ternary operaator
$ilmValjas = 'sajab lund';
echo ($ilmValjas == 'sajab lund') ? 'Tuleb minna sauna<br />' : 'Pole mõtet sauna minna<br />';