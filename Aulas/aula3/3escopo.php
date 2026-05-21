<?php
    $x = 10;  //escopo global

    function minhaFuncao($v){
    //escopo local
        // $x = 12;
        echo "Valor dentro da função: $v";
    }

    minhaFuncao($x);
    echo "<BR>Valor fora da função: $x";

?>