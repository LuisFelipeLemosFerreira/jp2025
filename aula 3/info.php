<?php

$alunos = [];
$notas = [];

for ($i = 1; $i <= 10; $i++) {
    $nome = trim(readline("Aluno $i - Nome: "));
    while ($nome === '') {
        $nome = trim(readline("Nome não pode ficar vazio. Digite o nome do Aluno $i: "));
    }

    $nota = readline("Aluno $i - Nota (0-10): ");

    $nota = str_replace(',', '.', $nota);
    while (!is_numeric($nota) || $nota < 0 || $nota > 10) {
        $nota = str_replace(',', '.', readline("Valor inválido. Digite a nota do Aluno $i (0-10): "));
    }
    $nota = floatval($nota);

    $alunos[] = $nome;
    $notas[] = $nota;
}

$media = array_sum($notas) / count($notas);
$maiorNota = max($notas);
$indiceMaior = array_search($maiorNota, $notas);
$nomeMaior = $alunos[$indiceMaior];

echo "\nMédia da turma: " . number_format($media, 2) . PHP_EOL;
echo "Maior nota: " . number_format($maiorNota, 2) . " - Aluno: $nomeMaior" . PHP_EOL;
<?

/*exericio */

<?php
// exercicio2.php
$numeros = [];

for ($i = 1; $i <= 10; $i++) {
    $input = readline("Digite o número $i: ");
    $input = str_replace(',', '.', $input);
    while (!is_numeric($input)) {
        $input = str_replace(',', '.', readline("Entrada inválida. Digite o número $i: "));
    }
    $numeros[] = $input + 0; // converte para número
}

$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

foreach ($numeros as $n) {
    if ($n < 0) $negativos++;
    if ($n > 0) $positivos++;
    // definição de par/ímpar para inteiros:
    if (is_int(0 + $n) || intval($n) == $n) {
        // se for inteiro (ou representado como inteiro), testa resto
        if (intval($n) % 2 == 0) $pares++;
        else $impares++;
    } else {
        // para não inteiros, não contam como pares/ímpares; opcional: arredondar
    }
}

echo PHP_EOL;
echo "Negativos: $negativos" . PHP_EOL;
echo "Positivos: $positivos" . PHP_EOL;
echo "Pares (entre inteiros): $pares" . PHP_EOL;
echo "Ímpares (entre inteiros): $impares" . PHP_EOL;
<?
/*exercicio 3 */
