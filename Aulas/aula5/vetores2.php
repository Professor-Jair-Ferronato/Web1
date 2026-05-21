<?php
    $frutas = ["maçã","banana","melancia","laranja","pera"];
    echo "Lista de frutas:<BR>";
    print_r($frutas);
    echo "<BR><BR>Lista em ordem crescente de frutas:<BR>";
    //Ordena o vetor em ordem crescente
    sort($frutas);
    print_r($frutas);
    echo "<BR><BR>Lista em ordem decrescente de frutas<br>";
    //Ordena o vetor em ordem descrescente
    rsort($frutas);
    print_r($frutas);
    echo "<BR><BR>";

    echo "O tamanho do vetor é: " . count($frutas);

?>