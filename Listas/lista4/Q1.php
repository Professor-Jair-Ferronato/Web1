<?php

function calcularDesconto($valor) {
if ($valor > 500) 
    return $valor * 0.85;
elseif ($valor >= 200) 
    return $valor * 0.90;
return $valor;
}
// Testes
echo calcularDesconto(600) . "\n";
echo calcularDesconto(300) . "\n";
echo calcularDesconto(100) . "\n";

?>