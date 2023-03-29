<?php
$asientos_disponibles = readline("Ingrese asientos disponibles ");
$es_hijo_de_tom=readline(" Eres hijo de tom ?");


if($asientos_disponibles > 0){
    echo "Puedes ver la pelicula";
  

}elseif($es_hijo_de_tom === "si"){
    echo "Bono extra";
}
else{
    echo "Mejor spoilea";

}
echo ("\n");