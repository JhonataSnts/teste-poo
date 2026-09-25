<?php

namespace App\Pagamentos;

use App\Contratos\Pagamento;

class Cartao implements Pagamento
{
    public function pagar(float $valor): void
    {
        echo "Pagamento de R$ {$valor} realizado via Cartão.";
    }
}