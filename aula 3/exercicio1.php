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
?>