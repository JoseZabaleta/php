<?php

$michis =[
    array(
        "nombre" => "michi1",
        "color" => "verde",
        "ocupacion" => "cazador",
        "comidas" => array(
            "comida_favoritas" => "arroz,carne,pollo,pezcado",
            "comida_nofavoritas" => "sopas,granos"
        )
        ),
    array(
        "nombre" => "michi2",
        "color" => "roja",
        "ocupacion" => "dormilon",
        "comidas" => array(
            "comida_favoritas" => "arroz,carne,pollo,pezcado",
            "comida_nofavoritas" => "sopas,granos"
        )
        ),
        array(
            "nombre" => "michi3",
            "color" => "azul",
            "ocupacion" => "roncador",
            "comidas" => array(
                "comida_favoritas" => "arroz,carne,pollo,pezcado",
                "comida_nofavoritas" => "sopas,granos"
            )
            )
    


];
//var_dump($michis);
$michis1 = $michis[1];
print_r ("Comidas de Michi2 " .$michis1 ['comidas']['comida_favoritas']);
echo("\n");

