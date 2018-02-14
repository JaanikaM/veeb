<?php
/**
 * Created by PhpStorm.
 * User: jaanika.muursepp
 * Date: 14.02.2018
 * Time: 13:25
 */
// funktsioon soodustuse arvutamiseks
/**
 * @param $taisHind
 * @param $soodusKaart
 * @param $kasOledOpilane
 */
function soogiHind($taisHind, $soodusKaart = false, $kasOledOpilane = false){
    // funktsiooni sisu
    $soodusHind = $taisHind;
    $soodustusProtsent = 15; // %
    $opilaseToetus = 1.80; // EUR
    if($soodusKaart){
        $soodusHind = $taisHind * ((100 - $soodustusProtsent) / 100);
    }
    if($kasOledOpilane){
        $soodusHind = $soodusHind - $opilaseToetus;
        // $soodusHind -= $opilaseToetus; // - operaatori lühendatud kuju
    }
    return $soodusHind;
}// funktsiooni lõpp
// testimiseks paneme erinevad väärtused paika
// kasutame selleks massiivi kujul (soodusKaart, kasOledOpilane)
//
// kasutajad on tabel (massiiv), kus
// 1. real on õpilase andmed
// 2. real on õpetaja andmed
// 3. real on külalise andmed
$kasutajad = array(
    array(
        'roll' => 'õpilane',
        'soodus' => true,
        'opilaskaart' => true
    ),
    array(
        'roll' => 'õpetaja',
        'soodus' => true,
        'opilaskaart' => false
    ),
    array(
        'roll' => 'külaline',
        'soodus' => false,
        'opilaskaart' => false
    )
);
// vaatame $kasutajad masiivi läbi
// for( tjm defineerimine; tjm kehtivuse kontroll; tjm suurendamine/vähendamine)
for($i = 0; $i < count($kasutajad); $i++)
{
    // kutsume funktsiooni tööle
    $soogiHind = soogiHind(2.65, $kasutajad[$i][0], $kasutajad[$i][1]);
    echo 'Prae hind = '.round($soogiHind, 2).' €<br />';
}