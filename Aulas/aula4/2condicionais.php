<?php
    $dia = 9;
    switch($dia){
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda-feira";
            break;
        default:
            echo "Outro dia";
            break;
    }
    echo "<BR>for<BR>";

    for($i = 1;$i <= 5; $i++){
            echo $i . "<br>";
    }

    echo "while<BR>";
    $contador = 1;
    while($contador <= 5){
            echo $contador . "<BR>";
            $contador++;
    }

     echo "do while<BR>";
     $cont = 1;
    do{
        echo $cont . "<BR>";
        $cont++;
    } while($cont <= 7);
?>