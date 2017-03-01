<?php
$nome      = $_POST["nome"];
$sobrenome   = $_POST["sobrenome"];
$email   = $_POST["email"];
$mensagem  = $_POST["mensagem"];
global $email;
$data      = date("d/m/y"); //pegando a data do evio
$hora      = date("H:i"); //pegando a hora
$ip        = $_SERVER['REMOTE_ADDR']; //pegando ip do cara que enviou

if($nome != NULL or $sobrenome != NULL or $email != NULL or $mensagem != NULL) {
mail ("meuamigodaescola2@hotmail.com", //email para enviar dados
      "Nome: $nome $sobrenome\nHora: $hora\nData: $data\nIp: $ip\nE-mail: $email\nMensagem: $mensagem",
      "From: $email"
     );
echo "<p>Obrigado por entrar em contato, $nome</p>";
echo "<p>Entraremos em contato quando possível</p>";
}
else {
echo "<p>Mensagem não enviada, por favor preencha corretamente o formulário.</p>"; 
} 
?>