<?php

namespace App\Pagamentos;

use App\Contratos\Pagamento;

class Boleto implements Pagamento
{
    public function pagar(float $valor): void
    {
        $desconto = $valor * 0.02;
        $total = $valor - $desconto;       

        echo "Pagamento de R$ {$valor} realizado via Boleto. Desconto de R$ {$desconto} aplicado. Total: R$ {$total}.";
    }
}
