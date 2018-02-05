<?php
header("Access-Control-Allow-Origin: *");
ini_set("display_errors", 0);
require_once("jogadores.class.php");
$jogadores = new Jogadores();

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$verifica = $jogadores->verificaJogador($email, $senha);


if($verifica){
	echo $verifica->nome;
	
}
else{
	die ("0");
}
