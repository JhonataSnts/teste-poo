<?php

namespace App\Contratos;

interface Pagamento
{
    public function pagar(float $valor): void;
    
}