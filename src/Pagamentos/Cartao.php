<?php

namespace App\Pagamentos;

use App\Contratos\Pagamento;

class Cartao implements Pagamento
{
    public function pagar(float $valor): void
    {
        $taxa = $valor * 0.05;
        $total = $valor + $taxa;

        echo "Pagamento de R$ {$valor} realizado via Cartão. Taxa de R$ {$taxa} aplicada. Total: R$ {$total}.";
    }
}