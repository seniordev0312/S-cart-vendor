<?php

namespace SCart\Core\Admin\Models;

class TaxService
{
    protected $taxRates = [
        'AB' => [0.05],
        'BC' => [0.07, 0.05],
        'MB' => [0.07, 0.05],
        'NB' => [0.15],
        'NL' => [0.15],
        'NT' => [0.05],
        'NS' => [0.15],
        'NU' => [0.05],
        'ON' => [0.13],
        'PE' => [0.15],
        'QC' => [0.09975, 0.05],
        'SK' => [0.06, 0.05],
        'YT' => [0.05],
    ];

    public function calculateTax(string $provinceCode, float $amount)
    {
        if (!isset($this->taxRates[$provinceCode])) {
            throw new \Exception('Invalid province code');
        }

        $provinceTaxRates = $this->taxRates[$provinceCode];

        $total = $amount;

        foreach ($provinceTaxRates as $rate) {
            $total += $total * $rate;
        }

        return $total;
    }
}