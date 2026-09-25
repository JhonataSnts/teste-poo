<?php

namespace App;

use App\Contratos\Pagamento;

class Pedido
{
    private float $valor;
    private Pagamento $pagamento;

    public function __construct(Pagamento $pagamento, float $valor)
    {
        $this->valor = $valor;
        $this->pagamento = $pagamento;
    }

    public function finalizar(): void
    {
        $this->pagamento->pagar($this->valor);
    }
}