<?php
$numero1 = 4;
$numero = 7;

echo "<h2>tabuada do $numero1</h2>";

for ($i = 1; $i <=10; $i++) {
    $resultado = $numero1 * $i;
    echo "$numero1 x $i = $resultado <br>" . PHP_EOL;
}

echo "<h2>tabuada do $numero</h2>";

for ($i = 1; $i <=10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>" . PHP_EOL;
}