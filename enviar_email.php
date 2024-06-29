<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $destinatario = 'melodyycat@gmail.com'; // Substitua pelo seu endereço de e-mail
    $assunto = 'Mensagem do formulário de contato';
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n\n";
    $corpo_email .= "Mensagem:\n$mensagem\n";

    if (mail($destinatario, $assunto, $corpo_email)) {
        echo '<script>alert("Mensagem enviada com sucesso!");</script>';
    } else {
        echo '<script>alert("Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.");</script>';
    }
}
?>
