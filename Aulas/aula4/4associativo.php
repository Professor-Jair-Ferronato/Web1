<?php
    $pessoa1 = ["nome" => "Maria","idade" => 28];
    echo "Nome: " . $pessoa1['nome'] ."<BR>" . "Idade: " . $pessoa1['idade'] . "<BR>";

    echo "<BR><BR>";
    $pessoas = [
        ["nome" => "João","idade" =>18, "cidade" => "Curitiba"],
        ["nome" => "Ana", "idade" => 92, "cidade" => "São Paulo"]
    ];

    foreach($pessoas as $pessoa){
        foreach($pessoa as $chave => $valor){
            echo $chave . ":" . $valor . "<BR>";
        }
        echo "<BR>";
    }
    echo "<BR>";

?>