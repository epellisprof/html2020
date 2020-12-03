<?php
$x = 10;
if ($x == 10) {
    echo "x = 10";
}
if (!isset($X)) {
    echo "x nao existe";
}
if ($x == 20) {
    echo "ok";
} else {
    echo "falso";
}

switch ($x) {
    case 0:
        echo "x = 0";
        break;
    default:
        echo "x <> 0";
        break;
}
$vetor = array(1, 2, 3, 4, 5, 6);
foreach ($vetor as $n) {
    //echo "O valor do elemento atual é: $n <br>";
    echo "<h$n> teste </h$n>";
}
for ($n = 1; $n <= 6; $n++) {
    echo "<h$n>Cabecalho $n </h$n>";
}
$n = 1;
while ($n <= 6) {
    echo "<h$n>teste</h$n>";
    $n++;
}

