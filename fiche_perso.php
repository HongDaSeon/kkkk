<?php
// Fichier de creation d'une fiche perso.
require_once './config.inc.php';

mysql_connect($CFG['server'],$CFG['login'], $CFG['pass']);

mysql_select_db($CFG['db']);

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	$rep = mysql_query("
		SELECT * 
		FROM `team`
		WHERE `id` = '$id'
		");
		
	if(!empty($rep)) 
		$data = mysql_fetch_array($rep);
	else {
		
	}
	// echo $data;
	$nom = $data['nom'];
	$prenom = $data['prenom'];
	$descr = $data['descr'];
	$devise = $data['devise'];
	$date = $data['data'];
	$lieu = $data['lieu'];
	$photo = $data['photo'];
	
}

else {
	include 'index.php';
}

?>