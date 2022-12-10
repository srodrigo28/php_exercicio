<?php

$alunos = [ 1 => 'edson', 2 => 'maria', 3 => 'aline' ];

foreach ($alunos as $key => $row){
    echo "$key em português é: $row " . "<br>";
}
echo "<br>";
echo "Total de " . count($alunos) . "<br>";