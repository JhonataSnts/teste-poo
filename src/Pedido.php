<?php

namespace App;

use App\Contratos\Pagamento;
use App\Exceptions\ValorPedidoInvalidoException;

class Pedido
{
    private float $valor;
    private Pagamento $pagamento;
    private Cliente $cliente;

    public function __construct(Pagamento $pagamento, float $valor, Cliente $cliente)
    {
        if ($valor <= 0) {
            throw new ValorPedidoInvalidoException("O valor do pedido deve ser maior que zero.");
        }
        $this->valor = $valor;
        $this->pagamento = $pagamento;
        $this->cliente = $cliente;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function finalizar(): void
    {
        $this->pagamento->pagar($this->valor);
    }
}