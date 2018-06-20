<?php 
	$email_destino="contato@novacasadapiscina.com.br";
	$assunto=$_POST['assunto'];
	$mensagem=$_POST['mensagem'];
	$voltar="<a href='index.php?pagina=home.php'>Voltar</a>";

	if (mail($email_destino, $assunto, $mensagem,"from:contato@novacasadapiscina.com.br")){
		echo "Mensagem enviada com sucesso.<a href='index.php?pagina=includes/home.php'>Click aqui</a> para voltar.";
	} else{
		echo "Erro ao enviar mensagem";
	}
?>