<?php
$vetor = [];

for ($i = 1; $i <= 10; $i++) {
    $input = readline("Digite o valor $i: ");
    $input = str_replace(',', '.', $input);
    while (!is_numeric($input)) {
        $input = str_replace(',', '.', readline("Entrada inválida. Digite o valor $i: "));
    }
    $vetor[] = $input + 0;
}

$multiplicador = readline("Digite um número para multiplicar todos os elementos: ");
$multiplicador = str_replace(',', '.', $multiplicador);
while (!is_numeric($multiplicador)) {
    $multiplicador = str_replace(',', '.', readline("Entrada inválida. Digite o multiplicador: "));
}
$multiplicador = $multiplicador + 0;

$resultado = [];
foreach ($vetor as $v) {
    $resultado[] = $v * $multiplicador;
}

echo PHP_EOL . "Vetor original: [" . implode(', ', $vetor) . "]" . PHP_EOL;
echo "Multiplicador: $multiplicador" . PHP_EOL;
echo "Vetor resultante: [" . implode(', ', $resultado) . "]" . PHP_EOL;
?>