<?php

require __DIR__ . '/vendor/autoload.php';

use App\Cliente;
use App\Exceptions\ValorPedidoInvalidoException;
use App\Pagamentos\Boleto;
use App\Pedido;

$cliente = new Cliente("João Silva", "joao.silva@example.com");

$boleto = new Boleto();
try {
    $pedido = new Pedido($boleto, 100.00, $cliente);
    
    echo "Cliente: " . $pedido->getCliente()->getNome() . " - Email: " . $pedido->getCliente()->getEmail() . PHP_EOL;
    $pedido->finalizar();
} catch (ValorPedidoInvalidoException $e) {
    echo "Erro: " . $e->getMessage();
}
