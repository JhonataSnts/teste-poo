<?php

require __DIR__ . '/vendor/autoload.php';


use App\Pagamentos\Pix;
use App\Pedido;


$pix = new Pix();
try {
    $pedido = new Pedido($pix, -100.00);
    $pedido->finalizar();
} catch (\InvalidArgumentException $e) {
    echo "Erro: " . $e->getMessage();
}
