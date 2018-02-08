<?php
/**
 * Created by PhpStorm.
 * User: jaanikamy
 * Date: 08.02.2018
 * Time: 12:40
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
$soiduKestvus = 0.8; // sõidu kestvus, 0.8 tundi, float
// konstandite defineerimine
define('NUMBER_PI', 3.14);
// Kasutades eel defineeritud muutujad ja konstandid
// väljasta ilusa teksti
echo 'Olen '.$eesNimi.' '.$pereNimi.'<br />';
echo 'Sõidan koolist kesklinna bussiga number '.$bussiNumber.'<br />';
echo 'Jõuan kesklinna '.$soiduKestvus.' tunniga<br />';
echo 'Midagi konstantset? PI = '.NUMBER_PI.'<br />';