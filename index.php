<!DOCTYPE html>
<html>
</head>
    <meta charset="utf-8">
    <title>HTML Tutorial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/custom.css">
</head>

<body>
<?php include "/includes/header.php";?>

    <?php
        /*include "/includes/home.php";
        include "/includes/product/product-pool.php";        
        include "/includes/product/product-pool-vinil.php";    
        include "/includes/product/product-pool-fibra.php"; 
        include "/includes/product/product-pool-azulejo.php";           
        include "/includes/product/product-spa.php";
        include "/includes/product/product-sauna.php";
        include "/includes/product/product-others-aquecedor-solar.php";
        include "/includes/product/product-others-aquecedor-gas.php";
        include "/includes/contact.php";
        include "/includes/about.php";*/
        include "/includes/faq.php";
	?>
	
	<?php
		/*include "/includes/conexao.php";

		$consulta="select * from ".$tabela;
		$query = mysql_query($consulta);

		while ($resultado=mysql_fetch_object($query)) 
		{
			$whatsapp=$resultado->whatsapp;
			$telefone=$resultado->celular;
			$email=$resultado->email;
		}*/
	?>

	<?php
        /*
		foreach ($_REQUEST as $_OPT => $_VAL) {
			$$_OPT = $_VAL;
		}
		if(is_array($pagina)){
			include("/includes/home.php");
		}
		else{
			include($pagina);
		}*/
	?>

<?php include "/includes/footer.php";?>

</body>
</html>