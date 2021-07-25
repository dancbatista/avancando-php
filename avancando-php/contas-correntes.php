<?php

$conta1 = [
    'titular' => 'Daniel Cleber Batista',
    'saldo' => 7.390
];
$conta2 = [
    'titular' => 'Danielle de Sousa Antonio',
    'saldo' => 15.290
];
$conta3 = [
    'titular' => 'Helena Maria Batista',
    'saldo' => 10.260
];
$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
echo PHP_EOL;