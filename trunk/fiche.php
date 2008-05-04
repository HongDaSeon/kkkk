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
	
	// $test = array(
		// 1 => pseudo,
		// 2 => nom,
		// 3 => prenom, 
		// 4 => date,
		// 5 => lieu,
		// 6 => assoc,
		// 7 => passion,
		// 8 => presentation,
		// 9 => devise
	// );
	
	// for($i = 0, $i < 9, $i++) {
		// if($data[$test[$i]] == '')
			// $data[$test[$i]] = '<test>';
	// }

	//echo 'devise: '.$data['devise'];
	
	// $i = 0;
	// while($i < 9) {
		// if($data[$test[$i]] == '	')
			// $data[$test[$i]] = '<test>';	
		// $i++;
	// }
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
<div class='alinea'><?php echo $data['nom'];?></div>
<br />
<br />
<li>Prénom: </li>
<div class='alinea'><?php echo $data['prenom'];?></div>
<br />
<br />
<li>Date de naissance:</li>
<div class='alinea'><?php echo $data['date'];?></div>
<br />
<br />
<li>Lieu où il habite:</li>
<div class='alinea'><?php echo $data['lieu'];?></div>
<br />
<br />
<li>Assoc de l'école dont il fait parti:</li>
<div class='alinea'><?php echo $data['assoc'];?></div>
<br />
<br />
<li>Passions:</li>
<div class='alinea'><?php echo $data['passion'];?></div>
<br />
<br />
<li>Ptite présentation:</li>
<div class='alinea'><?php echo $data['presentation'];?></div>
<br />
<br />
<li>Devise:</li>
<div class='alinea'><?php echo $data['devise'];?></div>
<br />
<br />


</ul>
</div>
</div>