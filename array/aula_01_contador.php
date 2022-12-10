<?php

$alunos = [ 1 => 'edson', 2 => 'maria', 3 => 'aline' ];

$contador = 0;
foreach ($alunos as $key => $row){
    echo "$key em português é: $row " . "<br>";
    $contador++;
    "<br>";
}
echo "<br>";
echo "Total de $contador" . "<br>";