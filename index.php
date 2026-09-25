<?php

require __DIR__ . '/vendor/autoload.php';

use App\Pagamentos\Cartao;
use App\Pedido;


$cartao = new Cartao();
$pedido = new Pedido($cartao, 100.00);

$pedido->finalizar();

