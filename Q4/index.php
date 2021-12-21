<?php

$billing = [
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'Outros' => 19849.53
];

$sum = array_sum($billing);

echo 'Faturamento total: R$ ' . str_replace('.', ',', $sum) . '<br>';
foreach ($billing as $state => $value) {
    $perc = ($value * 100) / $sum;
    echo $state . ' = ' . round($perc, 2)  . '%<br>';
}