<?php

$names = ['Diego', 'João', 'Marcos', 'Juliana', 'Rafael', 'Carol'];

foreach ($names as $name) {
    echo "<p>$name</p>";
}

/**
 * Função Explode();
 */

$namesInteger = "Diego, João, Marcos, Juliana, Rafael, Carol";

$array_names = explode(", ", $namesInteger);  //Trocando virgula(delimitador), por separação de strings e alterando para array;

foreach ($array_names as $names) {
    echo "<p>$names</p>";
}

/**
 * Função Implode();
 */

$namesBack = implode(", ", $array_names); //Transformando aray em apenas uma variável, inverso de explode
echo "<p>$namesBack</p>";