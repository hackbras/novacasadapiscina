<?php
    //  ob_start()

	// function zerar(){	
	// 	unset($email_destino);
	// 	unset($nome);
	// 	unset($email_contato);
	// 	unset($assunto);
	// 	unset($mensagem);
    //     unset($telefone);
	// }

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
	
		switch ($_SESSION["current_page"]) {
			case 'home':
				header('Location: '.'index.php?pagina=includes/home.php';
				break;
			case 'contact':
				header('Location: '.'index.php?pagina=includes/contact.php';
				break;
			case 'services':
				header('Location: '.'index.php?pagina=includes/services.php';
				break;
			case 'promotion':
				header('Location: '.'index.php?pagina=includes/promotion.php';
				break;
			
			default:
				header('Location:'.'index.php?pagina=includes/home.php';
				break;
		}

	}

?>