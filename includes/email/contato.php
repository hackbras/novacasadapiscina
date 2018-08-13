<?php
	function zerar(){	
		unset($email_destino);
		unset($nome);
		unset($email_contato);
		unset($assunto);
		unset($mensagem);
	}

	$email_destino="hackbras@outlook.com";
	$nome=$_POST['nome'];
	$email_contato=$_POST['email'];
	$assunto=$_POST['assunto'];
	$mensagem=$_POST['mensagem'];
	

	if (isset($nome)&& isset($email_contato) && isset($mensagem)
		&& mail($email_destino, $assunto, $mensagem,"from:".$email_contato)){

	echo '<script>alert("'.$nome.'sua mensagem foi enviada com sucesso.");</script>';

	zerar();
	
	
	}

?>