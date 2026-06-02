<?php
$frase = $_GET['frase'];
// A expressão /i ignora a diferença entre maiúsculas e minúsculas
$quantidade = preg_match_all('/[aeiou]/i', $frase);
echo "A frase contém $quantidade vogais.";
?>