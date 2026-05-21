<?php
   
    define("ESCOLA","Instituto Federal do Paraná<BR>"); //declaração constante
    echo ESCOLA;

    $nota = 5;
    echo ($nota >= 6) ? "Aprovado" : "Reprovado";
    echo "<BR>";

    $idade = 11;
    if($idade < 12){
        echo "Criança";
    } elseif ($idade < 18){
        echo "Adolescente";
    } else {
        echo "Adulto";
    }

?>