<?php
    $aluno = [
        "nome" => "Carla",
        "idade" => 25,
        "curso" => "Informática"
    ];

    echo "Campos definidos:<br>";
    print_r($aluno);
    echo "<br>Somente as chaves:<BR>";
    print_r(array_keys($aluno));
    echo "<BR>";
    echo "Somente os valores: <BR>";
    print_r(array_values($aluno));
    echo "<BR>";
    foreach($aluno as $info){
        echo $info . "<BR>";
    }

?>