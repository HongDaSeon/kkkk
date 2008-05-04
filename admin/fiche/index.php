<?php
// Fichier de remplissage des fiches persos.

require_once './config.inc.php';

mysql_connect($CFG['server'],$CFG['login'], $CFG['pass']);

mysql_select_db($CFG['db']);

if (isset($_GET['test'])) {

	$id = $_GET['liste'];
	$nom = $_GET['nom'];
	$prenom = $_GET['prenom'];
	$date = $_GET['date'];
	$lieu = $_GET['habitation'];
	$assoc = $_GET['assoc'];
	$passion = $_GET['passion'];
	$devise = $_GET['devise'];
	$present = $_GET['presentation'];
	
	$rep = mysql_query("
		UPDATE `team` 
		SET 
			`nom` = '$nom',
			`prenom` = '$prenom',
			`date` = '$date',
			`lieu` = '$lieu',
			`assoc` = '$assoc',
			`passion` = '$passion',
			`presentation` = '$present',
			`devise` = '$devise' 
		WHERE `id` = '$id'
		");
}


?>
<h2>Un blanc dans une case = un blanc dans la fiche<br>
Si vous avez rentré une premiere fois qqchose et que une seconde fois vous laissez un blanc<br>
=> blanc dans la fiche<br></h2>
<h3>La base de donnée enregistre la valeur de vos cases au dernier "envoyer" </h3>
<form action="./index.php" method="get">

	<input type="hidden" name="test" value="" />

	Choisir son pseudo: ( pas trop trop dur !) <br>
	<select name="liste">     
	<!--	<option value="1">Kekette</option>  
		<option value="2">Fanouk</option>     --> 
		<option value="3">Chaton</option>  
	<!--	<option value="4">Jéjé</option>   --> 
		<option value="5">Tiboo</option>    <!--
		<option value="6">Mika</option>  
		<option value="7">Nanard</option>   
		<option value="8">Lily</option>   
		<option value="9">Moumoutte</option>   
	-->	<option value="10">Bastos</option>   <!--
		<option value="11">Marty</option>   
		<option value="12">Sheshe</option> 
		<option value="13">Lio</option> 
		<option value="14">Clo</option> 
		<option value="15">Sysy</option> 
		<option value="16">Martin</option> 
		<option value="17">Jaybee</option> 
		<option value="18">Ninine</option> 
		<option value="19">Little</option> 
		<option value="20">Lala</option> 
	-->	<option value="21">Benji</option> <!--
		<option value="22">Dino</option> 
		<option value="23">Markhor</option> 
		<option value="24">Ssof</option>
		<option value="25">Teckto</option>
		<option value="26">Krikri</option>		
		<option value="27">Tonio</option>	
		<option value="28">Darkmoule</option> -->
		<option value="29">Nigger</option>
	</select>
	<br>
	nom: <br>	
	<input name="nom"  value="" type="text" /><br>
	
	prenom: <br>	
	<input name="prenom"  value="" type="text" /><br>
	
	date de naissance: ( du type "jj/mm/aaaa" svp!)<br>
	<input name="date"  value="" type="text" /><br>
	
	lieu d'habitation: <br>
	<input name="habitation"  value="" type="text" /><br>
	
	<H2>Tout saut de ligne doit etre signaler par une balise BR entre < > !!</H2>
	
	liste assoc: <br> 
    <textarea name="assoc" cols="50" rows="3">exemple: assoc je suis ceci <br /> je suis cela    
	</textarea><br />
	
	passions: <br />
    <textarea name="passion" cols="50" rows="3">
    </textarea><br />
	
	presentation: <br>
	<textarea name="presentation" cols="50" rows="5">
    </textarea><br />
	
	devise: <br />
	<textarea name="devise" cols="50" rows="3">
    </textarea><br /><br>
	
	<input type="submit" value="Envoyer" />
</form>