<?php
$servidor="localhost";
$usuario="root";
$senha="";
$banco="test";


$conexão=@mysql_connect($servidor,$usuario,$senha)or die(mysql_error());
mysql_select_db($banco)or die(mysql_error());

session_start();

/*Chamando todas as variaveis do html*/

$nome		=	$_POST['nome'];
/*Data de Nascimento DD/MM/AAAA*/
/*$dia		=	substr($data_nasc,0,2);
$mes		=	substr($data_nasc,3,2);
$ano		=	substr($data_nasc,6,4);
$dtnasc		=	"$dia-$mes-$ano";*/
$data_nascimento	=	$_POST['data_nascimento'];
//---------------------
$email		=	$_POST['email'];
$telefone	=	$_POST['telefone'];

/*regiao	=	$_POST['regiao'];
$unidade	=	$_POST['unidade'];*/
/*$score	=	'10';/*Score iniciara com 10*/
/*$validacaoOK ="";*/
/*$erro = false;

if ( !isset( $_POST ) || empty( $_POST ) ) {
	$erro = 'Nada foi inserido.';
}
if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
	$erro = 'Envie um email válido.';
}
 
echo "<script> alert(""+$erro)</script>";

*/
$sql=mysql_query("INSERT INTO tabelaactual(nome,data_nascimento,email,telefone)
values('$nome','$data_nascimento','$email','$telefone')");
/*voltar para a pagina contato*/

/*header("Location:Inicio.html");*/


session_destroy();

?>