<?php

// Entrada
$input = 8;

function fibonacci($input) {
    $fibo = [0, 1];
    while (end($fibo) < $input) {
        $lastKey = count($fibo) - 1;
        $fibo[] = $fibo[$lastKey] + $fibo[$lastKey - 1];
        if (end($fibo) == $input) {
            return $input . ' é o ' . count($fibo) . '° numero da sequência de fibonacci!';
        }
    }
    return "{$input} não pertence a sequência de fibonacci!";
}

echo fibonacci($input);
