<?php

function validarSenha($senha) {
if (strlen($senha) < 8)
    return false;
return preg_match('/\d/', $senha);
}
// Testes
var_dump(validarSenha("abc912345"));
var_dump(validarSenha("abc"));