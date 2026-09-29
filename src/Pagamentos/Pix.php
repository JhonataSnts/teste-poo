<?php

namespace App\Pagamentos;

use App\Contratos\Pagamento;

class Pix implements Pagamento
{
    public function pagar(float $valor): void
    {
        $desconto = $valor * 0.03;
        $total = $valor - $desconto;

        echo "Pagamento de R$ {$valor} realizado via Pix. Desconto de R$ {$desconto} aplicado. Total: R$ {$total}.";
    }
}