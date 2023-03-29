<?php
$segundos = readline("Ingre tiempo en segundos: ");

$horas = (int) ($segundos/3600);
$segundos = (int) ($segundos % 3600);
$minutos = (int) ($segundos /60);
$segundos = (int )($segundos % 60);
echo "Horas : ".$horas ." Minutos :" .$minutos. " Segundos " . $segundos;

echo "\n";

