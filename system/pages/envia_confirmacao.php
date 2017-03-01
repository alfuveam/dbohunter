<?php
$nome      = $_POST["nome"];
$email   = $_POST["email"];
$login   = $_POST["login"];
$valor  = $_POST["valor"];
$foto  = $_POST["foto"];
$codigo  = $_POST["codigo"];
global $email;
$data      = date("d/m/y"); //pegando a data do evio
$hora      = date("H:i"); //pegando a hora
$ip        = $_SERVER['REMOTE_ADDR']; //pegando ip do cara que enviou

if($nome != NULL or $email != NULL or $login != NULL or $valor != NULL or $foto != NULL or $codigo != NULL) {
mail ("felipe.b.t@hotmail.com", //email para enviar dados
      "Nome: $nome\nEmail: $email\nLogin: $login\nValor: $valor\nUrl Da Imagem: $foto\nCódigo De Transação: $codigo\nHora: $hora\nData: $data\nIp: $ip,
      "From: $email"
     );
echo "<p>Obrigado por confirmar, $nome</p>";
echo "<p>Ativaremos seus pontos dentro de dois dias.</p>";
}
else {
echo "<p>Confirmação não enviada, por favor preencha corretamente o formulário.</p>"; 
} 
?>