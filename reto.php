<?php

$hora=readline("Introduzca laas horas ");
$minuto = readline("Introduzca los minutos ");
$segundos = readline("Introduzca los segundos ");

echo "\n";
$hora =  ($hora * 3600);
$minuto = ($minuto * 60);

echo "Las horas ingresadas son $hora Segundos"."\n"
."Los minutos equivalen a  $minuto Segundos "." \n"."Los segundos son $segundos";