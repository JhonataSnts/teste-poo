<?php

require __DIR__ . '/vendor/autoload.php';

use App\Cliente;
use App\Exceptions\ValorPedidoInvalidoException;
use App\Pagamentos\Pix;
use App\Pedido;

$cliente = new Cliente("João Silva", "joao.silva@example.com");

$pix = new Pix();
try {
    $pedido = new Pedido($pix, 100.00, $cliente);
    $pedido->getCliente()->getNome(); // Acessando o nome do cliente associado ao pedido
    $pedido->getCliente()->getEmail(); // Acessando o email do cliente associado ao pedido
    echo "Cliente: " . $pedido->getCliente()->getNome() . " - Email: " . $pedido->getCliente()->getEmail() . PHP_EOL;
    $pedido->finalizar();
} catch (ValorPedidoInvalidoException $e) {
    echo "Erro: " . $e->getMessage();
}
