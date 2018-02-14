<?php
/**
 * Created by PhpStorm.
 * User: jaanika.muursepp
 * Date: 14.02.2018
 * Time: 13:25
 */
require_once 'funktsioonid.php'; // ligipääs funktsioonid.php failile
// väljastame html-i vorm
loeVormFailist('vorm.html');
var_dump($_POST);
echo '<pre>';
print_r($_POST);
echo '</pre>';
// testimiseks paneme erinevad väärtused paika
// kasutame selleks massiivi kujul (soodusKaart, kasOledOpilane)
//
// kasutajad on tabel (massiiv), kus
// 1. real on õpilase andmed
// 2. real on õpetaja andmed
// 3. real on külalise andmed
$kasutajad = array(
    array(
        'roll' => 'õpilasele',
        'soodus' => true,
        'opilaskaart' => true
    ),
    array(
        'roll' => 'õpetajale',
        'soodus' => true,
        'opilaskaart' => false
    ),
    array(
        'roll' => 'külalisele',
        'soodus' => false,
        'opilaskaart' => false
    )
);
// erinevad söögid
$praed = array(
    array(
        'nimetus' => 'Šnitsel',
        'kirjeldus' => 'šnitsel sealihast, lisand, kaste, salat, leib',
        'hind' => 2.68
    ),
    array(
        'nimetus' => 'Seapraad',
        'kirjeldus' => 'seapraad, lisand, kaste, salat, leib',
        'hind' => 2.65
    )
);
// vaatame $kasutajad masiivi läbi
foreach ($praed as $praad){
    echo '<h1>'.$praad['nimetus'].'</h1>';
    echo '<code>'.$praad['kirjeldus'].'</code><br />';
    echo '<ul>';
    foreach ($kasutajad as $kasutaja){
        $soogiHind = soogiHind($praad['hind'], $kasutaja['soodus'], $kasutaja['opilaskaart']);
        echo '<dd>Prae hind '.$kasutaja['roll'].' = '.round($soogiHind, 2).' €</dd><br />';
    }
    echo '</ul>';
}