<?php
    $alunos = [
        ["nome" => "Ana", "notas" => 
        [8,6,8,5]],
        ["nome" => "Pedro", "notas" => [4,8,2,5]],
        ["nome" => "Carlos", "notas" => [7,9,4,5]]
    ];

    foreach($alunos as $aluno){
        echo "Aluno: " . $aluno["nome"] . "<BR>";
        $soma = 0;
        foreach($aluno["notas"] as $nota){
            echo "Nota: $nota <BR>";
            $soma += $nota;
        }
        $media = $soma / 4;
        echo "Média: " . $media . "<BR><BR>";
    }
?>