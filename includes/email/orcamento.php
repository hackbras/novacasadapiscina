<?php
	function zerar(){	
		unset($email_destino);
		unset($nome);
		unset($email_contato);
		unset($assunto);
		unset($mensagem);
        unset($telefone);
	}

	$email_destino="hackbras@outlook.com";
	$nome=$_POST['nome'];
	$email_contato=$_POST['email'];
	$assunto=$_POST['assunto'];
	$mensagem=$_POST['mensagem'];
	$telefone=$_POST['telefone'];

	if (isset($nome)&& isset($email_contato) && isset($mensagem)
		&& mail($email_destino,"Solicitação de orçamento" .$assunto, $mensagem." telefone".$telefone,"from:".$email_contato)){

	echo '<script>alert("'.$nome.'sua mensagem foi enviada com sucesso.");</script>';

	zerar();
	

	}

?>