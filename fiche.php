<?php
// Fichier de creation des fiches perso.
require_once './config.inc.php';

mysql_connect($CFG['server'],$CFG['login'], $CFG['pass']);

mysql_select_db($CFG['db']);

if(isset($_GET['id'])) {

	$id = $_GET['id'];
	
	$rep = mysql_query("
	SELECT * 
	FROM `team`
	WHERE `id` = '$id'
	");
	
	$data = mysql_fetch_array($rep);

}
?>
<div class='boxed'>
	<h2 class='title'><?php echo "fiche de: ".$data['pseudo'].".";?></h2>
		<div class='content'>


<br />

<img id='<?php echo $data['pseudo'];?>' src='./img/tete/<?php echo $data['path'];?>' alt='<?php echo $data['pseudo'];?>'/>
<br />
<br />

<ul>
<li>Nom: </li>
<?php echo $data['nom'];?>
<br />
<br />
<li>Pr�nom: </li>
<?php echo $data['prenom'];?>
<br />
<br />
<li>Date de naissance:</li>
<?php echo $data['date'];?>
<br />
<br />
<li>Lieu o� il habite:</li>
<?php echo $data['lieu'];?>
<br />
<br />
<li>Assoc de l'�cole dont il fait parti:</li>
<?php echo $data['assoc'];?>
<br />
<br />
<li>Passions:</li>
<?php echo $data['passion'];?>
<br />
<br />
<li>Ptite pr�sentation:</li>
<?php echo $data['presentation'];?>
<br />
<br />
<li>Devise:</li>
<?php echo $data['devise'];?>
<br />
<br />


</ul>
</div>
</div>