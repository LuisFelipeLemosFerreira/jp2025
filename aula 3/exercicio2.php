<?php
$numeros = [];

for ($i = 1; $i <= 10; $i++) {
    $input = readline("Digite o número $i: ");
    $input = str_replace(',', '.', $input);
    while (!is_numeric($input)) {
        $input = str_replace(',', '.', readline("Entrada inválida. Digite o número $i: "));
    }
    $numeros[] = $input + 0; 
}

$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

foreach ($numeros as $n) {
    if ($n < 0) $negativos++;
    if ($n > 0) $positivos++;

    if (is_int(0 + $n) || intval($n) == $n) {

        if (intval($n) % 2 == 0) $pares++;
        else $impares++;
    } else {
    }
}

echo PHP_EOL;
echo "Negativos: $negativos" . PHP_EOL;
echo "Positivos: $positivos" . PHP_EOL;
echo "Pares (entre inteiros): $pares" . PHP_EOL;
echo "Ímpares (entre inteiros): $impares" . PHP_EOL;
?>