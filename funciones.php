<?php 
function get_pockemon(){
    $numeroaleatorio = rand(1,5);
    switch($numeroaleatorio){
       case 1:
        echo "Pikachu\n";
        break;

        case 2:
            echo "Charmander\n";
            break;

            case 3:
                echo "Flopy\n";
                break;
            
            default:
            echo "No hay pokemones\n";
    }

}
for ($i=0; $i<20; $i++) { 
    get_pockemon();
}


