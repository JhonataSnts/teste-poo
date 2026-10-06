<?php

namespace App\Contratos;

use App\Pagamentos\ResultadoPagamento;

interface Pagamento
{
    public function pagar(float $valor): ResultadoPagamento;
}