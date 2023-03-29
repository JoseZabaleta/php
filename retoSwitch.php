<?php 

$saldo = readline("Ingrese Saldo en dolares ; ");

if ($saldo >= 100) {
    echo "Puede retirar el saldo completo ";
} else {
    echo "Siga haciendo aporte ";
}
echo ("\n");