<?php

/**
 * No PHP as chaves de um array associativo precisam ter algum significado.
 * Os valores permitidos para as chaves são inteiro ou string.
 * Os indices abaixo são convertidos e sobrescritos, por isso apenas o último é exibido.
 */

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}