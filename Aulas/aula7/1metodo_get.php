<?php
/*
 * AULA 7 - Tópico 1: Método GET - Enviando Dados pela URL
 * --------------------------------------------------------
 * O método GET envia dados do formulário PELA URL, visíveis na barra de endereço.
 * Exemplo de URL gerada: pagina.php?nome=Ana&idade=17
 *
 * Em PHP, os dados recebidos via GET são acessados pelo array superglobal $_GET:
 *   $_GET["nomeDoCampo"]
 *
 * Características do método GET:
 *  + Os dados ficam visíveis na URL (útil para compartilhar links com parâmetros)
 *  + O navegador pode guardar a URL nos favoritos com os dados
 *  - NÃO é adequado para senhas ou informações sensíveis
 *  - Tem limite de tamanho (aprox. 2000 caracteres)
 *
 * SEGURANÇA: sempre use htmlspecialchars() ao exibir dados recebidos do usuário
 * para prevenir ataques XSS (injeção de código HTML/JavaScript malicioso).
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 7 - Método GET</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        form { background: #f0f0f0; padding: 20px; border-radius: 8px; max-width: 400px; }
        input, select { width: 100%; padding: 6px; margin: 6px 0 14px 0; box-sizing: border-box; }
        button { background: #0078d4; color: white; padding: 8px 20px; border: none; border-radius: 4px; cursor: pointer; }
        .resposta { background: #e8f5e9; padding: 15px; border-radius: 8px; margin-top: 20px; max-width: 400px; }
    </style>
</head>
<body>
    <h2>Formulário com Método GET</h2>

    <!-- O atributo action define para qual arquivo os dados serão enviados.
         Deixar vazio ("") ou usar o mesmo arquivo faz o envio para a página atual. -->
    <form action="" method="GET">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome">

        <label>Idade:</label>
        <input type="number" name="idade" placeholder="Digite sua idade">

        <label>Curso:</label>
        <select name="curso">
            <option value="">-- Selecione --</option>
            <option value="Informática">Informática</option>
            <option value="Administração">Administração</option>
            <option value="Contabilidade">Contabilidade</option>
        </select>

        <button type="submit">Enviar</button>
    </form>

<?php
// isset() verifica se a variável existe e não é null
// Usamos para saber se o formulário já foi submetido
if (isset($_GET["nome"]) && $_GET["nome"] !== "") {
    // htmlspecialchars() converte caracteres especiais em entidades HTML
    // Isso impede ataques XSS (Cross-Site Scripting)
    $nome  = htmlspecialchars($_GET["nome"]);
    $idade = htmlspecialchars($_GET["idade"]);
    $curso = htmlspecialchars($_GET["curso"]);

    echo "<div class='resposta'>";
    echo "<h3>Dados recebidos via GET:</h3>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Idade:</strong> $idade anos</p>";
    echo "<p><strong>Curso:</strong> $curso</p>";
    echo "</div>";

    // Mostrando a URL gerada para fins didáticos
    echo "<p style='color:gray; font-size:0.9em;'>Observe a URL: ela contém os dados enviados!</p>";
}
?>
</body>
</html>
