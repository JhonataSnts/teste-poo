<?php

use App\Pagamentos\Boleto;

require __DIR__ . '/vendor/autoload.php';

$boleto = new Boleto();
$resultado = $boleto->pagar(100.00);

var_dump($resultado->getMetodoPagamento());
var_dump($resultado->getValorOriginal());
var_dump($resultado->getTipoAjuste());
var_dump($resultado->getValorAjuste());
var_dump($resultado->getValorFinal());

$resultadoPagamento = $boleto->pagar(250.00);
var_dump($resultadoPagamento->getMetodoPagamento());
var_dump($resultadoPagamento->getValorOriginal());
var_dump($resultadoPagamento->getTipoAjuste());
var_dump($resultadoPagamento->getValorAjuste());
var_dump($resultadoPagamento->getValorFinal());