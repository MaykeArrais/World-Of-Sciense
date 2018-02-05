<?php 
require_once('worldofscience.class.php');

class Jogadores extends WorldOfScience{
	public function __construct(){
		parent::__construct('jogadores');
	}


	public function verificaJogador($email, $senha){
		return $this->query("SELECT * FROM $this->tabela WHERE email='$email' AND senha='$senha'")->Fetch();
	}

	public function verificaEmail($email){
		return $this->query("SELECT * FROM $this->tabela WHERE email='$email'")->Fetch();
	}

	public function verificaNome($nome){
		return $this->query("SELECT * FROM $this->tabela WHERE nome='$nome'")->Fetch();
	}


}