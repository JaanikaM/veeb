<?php
/**
 * Created by PhpStorm.
 * User: jaanika.muursepp
 * Date: 14.02.2018
 * Time: 13:36
 */
echo '
    <form method="post" action="'.$_SERVER['PHP_SELF'].'">
        Sisesta arv vahemikus 0-50: <input type="number"><br />
        <input type="submit" value="Kontrolli">
    </form>
';