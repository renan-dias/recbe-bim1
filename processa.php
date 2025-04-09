<?php
// Exemplo básico de conexão com formulário

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    // Aqui você pode salvar em banco de dados ou enviar por e-mail
    echo "<h2>Mensagem recebida!</h2>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Mensagem: $mensagem</p>";
} else {
    echo "<p>Formulário não enviado corretamente.</p>";
}
?>
