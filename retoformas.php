<?php 

$numerotienda =  readline  ("Ingrese Numero tienda ");
$anterior = 0;
$actual = 1;
if (  is_numeric($numerotienda)) {
    # code...

for ($i=2; $i <= $numerotienda ; $i++) { 
    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;

    echo $actual."\n";
  


    }
    
}else {
   echo "Dato Invalido, por favor ingrese dato numerico "; # code...
}

