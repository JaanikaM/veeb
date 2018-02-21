<?php
/**
 * Created by PhpStorm.
 * User: jaanika.muursepp
 * Date: 21.02.2018
 * Time: 08:58
 */
// määrame katsete arvu muutujat
$katseteArv = $_POST['katseteArv'];
// kontrollime antud väärtuse olemasolu
$katseteArv = isset($katseteArv) ? ++$katseteArv : 0;
// trükime andmetega täidetud vorm
echo '
    <form method="post" action="'.$_SERVER['PHP_SELF'].'">
        Sisesta arv vahemikus 1-50: 
        <input type="number" name="kasutajaArv"><br />
        <input type="hidden" name="katseteArv" value="'.$katseteArv.'">
        <input type="submit" value="Kontrolli">
    </form>
';
// kontrollime, kas arv on edastatud
if(!empty($_POST['kasutajaArv'])){
    // määrame arvu
    $serveriArv = 10;
    $kasutajaArv = $_POST['kasutajaArv'];
    if($kasutajaArv > $serveriArv){
        echo 'Pakutud väärtus on suurem<br />';
    }
    if ($kasutajaArv < $serveriArv) {
        echo 'Pakutud väärtus on väiksem<br />';
    }
    if (abs($kasutajaArv-$serveriArv)<=5){
        if($kasutajaArv == $serveriArv){
            echo 'Arvasid ära!<br />';
            echo 'Arv on '.$serveriArv.'<br />';
            echo 'Arvu ära aramiseks läks '.$katseteArv.' korda<br />';
            exit;
        }
        echo 'Oled juba hästi lähedal<br />';
    }
} else {
    echo 'Arv peab olema sisestatud!';
}