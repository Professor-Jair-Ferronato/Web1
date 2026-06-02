<?php
function calcularTempoVoo($litros)
{
    $consumoPorMinuto = 12;
    $tempoTotalMinutos = $litros / $consumoPorMinuto;
    $minutos = floor($tempoTotalMinutos);
    $segundos = ($tempoTotalMinutos - $minutos) * 60;
    return "O tempo estimado de voo é de $minutos minutos e " .
        round($segundos) . " segundos.";
}
if (isset($_POST['combustivel'])) {
    echo calcularTempoVoo($_POST['combustivel']);
}

?>