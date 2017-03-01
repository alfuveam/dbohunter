<?
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$email = $_POST["email"];
	$mensagem = $_POST["mensagem"];
	
	$conteudo = "DBZ Hunter Games  - Mensagem \n\n  Nome: " . $nome . "\n Sobrenome: " .$sobrenome . "\n E-mail: " . $email . "\n  Mensagem: " . $mensagem  ;
	
	$enviou = mail("meuamigodaescola2@hotmail.com", "DBZ Hunter Games - REPORT", $conteudo);
	
	if($enviou){
		header("location:Mensagem_Enviada.html");
	}
	else{
		header("location:Mensagem_Nao_Enviada.html");
	}
?>