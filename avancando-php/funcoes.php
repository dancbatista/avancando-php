<?php

function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem('Você não pode sacar');
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos.");
    }

    return $conta;
}

// Passar dados por referencia e elago que deve ser feito com cuidado.
// O codigo utiliza desse caso para fins didaticos.
function titularComLetrasMaiusculas(array &$conta) 
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo. </li>";
}