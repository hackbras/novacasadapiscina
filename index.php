<!DOCTYPE html>
<html>
</head>
    <meta charset="utf-8">
    <title>Novacasadapiscina</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/custom.css">
	<link rel="stylesheet" href="styles/animate.css">
	<script src="scripts/main.js"></script>
	<script src="scripts/load.js"></script>
	<link REL="SHORTCUT ICON" HREF="assets/img/logo3-1.png">
</head>

<body onload="onload()">
	<?php 		
		include "includes/header.php";
	?>

	<?php
		/*include "includes/conexao.php";

		$consulta = "select * from ".$tabela;
		$query = mysql_query($consulta);

		while ($resultado=mysql_fetch_object($query)) 
		{
			$whatsapp=$resultado->whatsapp;
			$telefone=$resultado->celular;
			$email=$resultado->email;
		}*/
	?>

	<?php
        
		foreach ($_REQUEST as $_OPT => $_VAL) {
			$$_OPT = $_VAL;
		}
		if(is_array($pagina)){
			include("includes/home.php");
		}
		else{
			include($pagina);
		}/**/
	?>

<?php include "includes/footer.php";?>

</body>
</html>