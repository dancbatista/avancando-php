<?php

$contasCorrentes = [
    '070.403.546-40' => ['titular' => 'Daniel Cleber Batista','saldo' => 7390 ], 
    '228.447.968-50' => ['titular' => 'Danielle de Sousa Antonio','saldo' => 15290 ],
    '190.433.546-48' => ['titular' => 'Helena Maria Batista','saldo' => 10260]
];

$contasCorrentes['170.683.946-80'] = ['titular' => 'Andrey Henrique Eugênio', 'saldo' => 3270];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}