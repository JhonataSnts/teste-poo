<?php

namespace App\Pagamentos;

class ResultadoPagamento
{
    private string $metodoPagamento;
    private float $valorOriginal;
    private string $tipoAjuste;
    private float $valorAjuste;
    private float $valorFinal;

    public function __construct(string $metodoPagamento, float $valorOriginal, string $tipoAjuste, float $valorAjuste, float $valorFinal)
    {
        $this->metodoPagamento = $metodoPagamento;
        $this->valorOriginal = $valorOriginal;
        $this->tipoAjuste = $tipoAjuste;
        $this->valorAjuste = $valorAjuste;
        $this->valorFinal = $valorFinal;
    }

    public function getMetodoPagamento(): string
    {
        return $this->metodoPagamento;
    }

    public function getValorOriginal(): float
    {
        return $this->valorOriginal;
    }

    public function getTipoAjuste(): string
    {
        return $this->tipoAjuste;
    }

    public function getValorAjuste(): float
    {
        return $this->valorAjuste;
    }

    public function getValorFinal(): float
    {
        return $this->valorFinal;
    }
}
