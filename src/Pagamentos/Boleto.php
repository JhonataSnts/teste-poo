<?php

namespace App\Pagamentos;

use App\Contratos\Pagamento;

class Boleto implements Pagamento
{
    public function pagar(float $valor): ResultadoPagamento
    {
        $desconto = $valor * 0.02;
        $total = $valor - $desconto;       

        $resultadoPagamento = new ResultadoPagamento("Boleto", $valor, "Desconto", $desconto, $total);
        return $resultadoPagamento;
    }
}
