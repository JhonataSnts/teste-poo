<?php

require __DIR__ . '/vendor/autoload.php';


use App\Pagamentos\Pix;
use App\Pedido;
use App\Exceptions\ValorPedidoInvalidoException;


$pix = new Pix();
try {
    $pedido = new Pedido($pix, -100.00);
    $pedido->finalizar();
} catch (ValorPedidoInvalidoException $e) {
    echo "Erro: " . $e->getMessage();
}
