<?php

$idadeList = [36, 35, 25, 19, 43, 52, 11, 5, 13];
$idadeList[] = 44;

list($idadeDaniel, $idadeDanielle, $idadeAndrey) = $idadeList;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}
