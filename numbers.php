<?php

$saldos = [2500, 3000, 4400, 5000, 8700, 1000, 9000];

foreach ($saldos as $saldo) {
    echo "<p>$saldo</p>";
}

sort($saldos); // ordenando array crescente

echo "O menor saldo é $saldos[0]";