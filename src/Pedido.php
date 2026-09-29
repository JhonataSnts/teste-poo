<?php

namespace App;

use App\Contratos\Pagamento;

class Pedido
{
    private float $valor;
    private Pagamento $pagamento;

    public function __construct(Pagamento $pagamento, float $valor)
    {
        if ($valor <= 0) {
            throw new \InvalidArgumentException("O valor do pedido deve ser maior que zero.");
        }
        $this->valor = $valor;
        $this->pagamento = $pagamento;
    }

    public function finalizar(): void
    {
        $this->pagamento->pagar($this->valor);
    }
}