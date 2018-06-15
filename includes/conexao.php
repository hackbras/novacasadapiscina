<?php

//servidor remoto
/*
	$servidor='localhost';
	$usuario='supor238_admin';
	$senha='87976465.h';


$conexao = @mysql_connect($servidor,$usuario,$senha) or die ("Erro de conexao");
$banco= 'supor238_teste';
$tabela='contatos_suportedesk';
*/
//servidor local

$servidor='localhost';
$usuario='root';
$senha='0376';

$conexao = @mysql_connect($servidor,$usuario,$senha) or die ("Erro de conexao");
$banco= 'novacasadapiscina';
$tabela='usuarios';/**/


if ($sql_banco = mysql_select_db($banco,$conexao)) {
	//echo "Conexão realizada.";
}else{
	echo "Erro de conexão";
}

return;
?>