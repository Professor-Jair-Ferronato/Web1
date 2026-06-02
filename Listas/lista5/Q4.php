<?php
$senha = $_POST['senha'];
$comprimentoOk = strlen($senha) >= 8;
$temNumero = preg_match('/[0-9]/', $senha);
if ($comprimentoOk && $temNumero) {
    echo "Senha válida e segura.";
} else {
    echo "Senha inválida. Certifique-se de usar 8 caracteres e incluir
um número.";
}
