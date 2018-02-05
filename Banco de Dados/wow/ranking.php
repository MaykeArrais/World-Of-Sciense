<?php
require_once("ranking.class.php");
$ranking = new Ranking();

if ($_POST) {
	//Nome e Pontuação
	$ranking->add();
}


#$ranking->delete(5);
#$ranking->update(5);