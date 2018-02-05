<?php
header("Access-Control-Allow-Origin: *");
ini_set("display_errors", 0);
require_once("jogadores.class.php");
$jogadores = new Jogadores();


$_POST['senha'] = md5($_POST['senha']);

$verifica = $jogadores->verificaEmail($_POST['email']);
$verificaN = $jogadores->verificaNome($_POST['nome']);

if($verifica){
	die("2");
}else if($verificaN){
	die("3");
}

if($jogadores->add()){
	die("1");
}else{
	die("0");
}
