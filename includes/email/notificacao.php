<?php  
    function zerar(){	
    	unset($email_destino);
    	unset($nome);
    	unset($email_contato);
    	unset($assunto);
    	unset($mensagem);
    }

	$email_destino="contato@novacasadapiscina.com";
	$nome=$_POST['nome'];
	$email_contato=$_POST['email'];
	

	if (isset($nome)&& isset($email_contato)
		&& mail($email_destino, "notificação", "Solicitação de notificação","from:".$email_contato)){

	echo '<script>alert("'.$nome.'sua mensagem foi enviada com sucesso.");</script>';

	zerar();

	}

?>