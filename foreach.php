<?php 
$tiendaCafe = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24

);
foreach ($tiendaCafe as $cafe => $price) {

     /*   if ($cafe == "Latte") {
        echo "Llegamos a Latte \n";
        
        echo "El Cafe $cafe cuesta $$price USD \n";
        break;
    }
 */

    if ($cafe == "Recalentado") {
        continue;
       
    } echo "El $cafe es rico \n";
   
    # code...
} 
