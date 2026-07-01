<?php

// 1. Definindo o contrato
interface Notificador {
    // Métodos em interfaces DEVEM ser sempre públicos
    public function enviar(string $mensagem): void;
}

// 2. Classe que implementa o contrato para E-mail
class NotificacaoEmail implements Notificador {
    public function enviar(string $mensagem): void {
        echo "Enviando E-mail: $mensagem<BR>";
    }
}

// 3. Classe que implementa o contrato para SMS
class NotificacaoSMS implements Notificador {
    public function enviar(string $mensagem): void {
        echo "Enviando SMS no celular: $mensagem<BR>";
    }
}

// 4. Uso prático (Polimorfismo)
function comunicarCliente(Notificador $notificador, string $msg) {
    // Não importa se é E-mail ou SMS, sabemos que o método 'enviar' existe!
    $notificador->enviar($msg);
}

$email = new NotificacaoEmail();
$sms = new NotificacaoSMS();

comunicarCliente($email, "Sua conta foi ativada!");
comunicarCliente($sms, "Seu código de login é 4002");