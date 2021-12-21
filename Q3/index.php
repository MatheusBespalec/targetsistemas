<?php

// Receber Json e Converter para array
$data = file_get_contents('dados.json');
$data = json_decode($data, true);

// Elminar dias com valor = 0
$valid = function(array $billing) {
    return ($billing['valor'] != 0);
};
$data = array_filter($data, $valid);

//Calcular média de faturamento diário nos dias de trabalho
$sum = array_sum(array_column($data, 'valor'));
$workdays = count($data);
$avg = $sum / $workdays;

//
$min = $max = $data[0];
$aboveAvg = 0;
foreach ($data as $billing) {
    $min = $billing['valor'] < $min['valor'] ? $billing : $min;
    $max = $billing['valor'] > $max['valor'] ? $billing : $max;

    if ($billing['valor'] > $avg) {
        $aboveAvg+= 1;
    }
}

// Exibir resultados
echo "O dia {$min['dia']} foi onde tivemos o menor faturamento, sendo este de R$ {$min['valor']}. <br>";
echo "O dia {$max['dia']} foi onde tivemos o maior faturamento, sendo este de R$ {$max['valor']}. <br>";
echo "Em $aboveAvg dos $workdays dias trabalhados no mês, o faturamento  diário foi superior à média mensal.";