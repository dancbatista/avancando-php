<?php
// Posso usar include ou require
require_once 'funcoes.php';

$contasCorrentes = [
    '070.493.546-40' => ['titular' => 'Daniel Cleber Batista','saldo' => 7390 ], 
    '228.487.968-90' => ['titular' => 'Danielle de Sousa Antonio','saldo' => 15290 ],
    '190.483.586-48' => ['titular' => 'Helena Maria Batista','saldo' => 10260],
    '296.153.883-90' => ['titular' => 'Andrey Henrique Eugênio','saldo' => 4570]
];

//$contasCorrentes['070.493.546-40'] = sacar($contasCorrentes['070.493.546-40'], 8000);
//$contasCorrentes['228.487.968-90'] = sacar($contasCorrentes['228.487.968-90'], 8000);
//$contasCorrentes['190.483.586-48'] = depositar($contasCorrentes['190.483.586-48'], -110);

unset($contasCorrentes['296.153.883-90']);

titularComLetrasMaiusculas($contasCorrentes['228.487.968-90']);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>