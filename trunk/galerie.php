<?php
//fichier de creation de la gallerie
require_once './config.inc.php';

mysql_connect($CFG['server'],$CFG['login'], $CFG['pass']);

mysql_select_db($CFG['db']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Kaliente, toujours plus show !!</title>

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="keywords" content="bde, BDE, Kaliente, KALIENTE, kaliente, liste bde, eisti, eisti.fr, fintz, liste, campagne, campagne bde, cergy, association, cergy pontoise, 95, Cergy, région parisienne, region parisienne, val d'oise, Val d'oise" />
		<link rel="stylesheet" media="screen" type="text/css" title="Kaliente" href="css/index.css" />		
          
		<script type="text/javascript" src="js/image-slideshow-4.js"></script>
		<script type="text/javascript" src="js/drag-drop-custom.js"></script>
	
		<!-- inclusion des liens pour l'affichage de la galerie-->
		<link rel="stylesheet" type="text/css" href="lightbox.css" />
		<script type="text/javascript" src="lightbox.js"></script>
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />    
		<script type="text/javascript" src="js/prototype.js"></script>
		<script type="text/javascript" src="js/scriptaculous.js?load=effects"></script>
		<script type="text/javascript" src="js/lightbox.js"></script> 
			
    </head>
	
	<!-- Corps-->
	<body>
	   <div id='header'>
			<div id='logo'>
				<a href="index.php"><img src="img/kaliente_noir.png" alt="Kaliente, toujours plus show !!" /></a>
			</div>
			<div id='menu'>
				<ul>
					<li><a href="index.php?news">Le Programme</a></li>
					<li><a href="index.php?equipe">L'équipe</a></li>
					<li><a href="index.php?partenaires">Nos Partenaires</a></li>
					<li><a href="index.php?projet">Notre projet</a></li>
					<li><a href="index.php?livre">Livre d'or</a></li>
					<li><a href="./galerie.php">Galerie (test)</a></li>
				</ul>   
			</div> 
		</div>  <!-- Fin du header-->
		
		<!-- Début du content-->
		<div id='content'>   
			<div id='sidebar'>
				<div class='boxed'>
					<h2 class='title'>Menu Galerie</h2>
					<div class='content'>
					
					<?php
						$rep = mysql_query("
						SELECT * 
						FROM `galerie`
						");
						
						if(isset($rep)) {
							while($data = mysql_fetch_array($rep)) {
								echo "<a href='./galerie.php?name=".$data['nom']."'>".$data['intitule']."</a>";
								echo "<br />";
								echo "<br />";
							}
						}
						
					?>
					</div>
				</div>
			</div>
			
		<div class='include'>
	
   <?php 
$name = 'paris';
$page = 1; // Page par défaut : 1

if(isset($_GET['page'])) 
	$page = $_GET['page'];

	
if(isset($_GET['name'])) {

	$name = $_GET['name'];
	
	$rep = mysql_query("
		SELECT `id`,`path`
		FROM `galerie`
		WHERE `nom` = '$name'
		");
		
	if(!empty($rep)) 
		$data = mysql_fetch_array($rep);	

}


if(!isset($data['path']))
	$data['path'] = 'kaliente_paris/'; // Page par defaut

$rep = 'thumb/'.$data['path'];
$dir = opendir($rep);
$i = 0; // increment boucle (4 colones par lignes)


//Compter les fichiers du dossier (seulement les images)
$files = glob($rep."/*.db");
$compteurthumbs = count($files);
$files = glob($rep."/*.*");
$compteurf = count ($files) - $compteurthumbs;


//Increment pour compter les fichier pendant l'écriture de la page html
$c = 0;

/*
* Précision:
*	on veut mettre seulement 25 photos par page pour une meilleure lisibilité
*/
$modulo = $compteurf % 25;
$nbpages = ($compteurf - $modulo) / 25 + 1;


echo "<div class='center'>";
echo '<table class="container">';
echo '<tr>';

$foto_min = ($page -1) * 25 + 1;
$foto_max = $page * 25;
 echo $foto_min."<BR>";
 echo $foto_max."<BR><br>";

echo "au début: i= ".$i."<br>";
echo "au début: c= ".$c."<br><br>";
while (FALSE !== ($f = readdir($dir))) {
	
	if(is_file($rep.$f) && $f != 'Thumbs.db')
		$c++;
	
	//echo $c." eme fichier: i = ".$i."<br>";
	
	if(is_file($rep.$f) && $f != 'Thumbs.db' && $i < 5) { // && $c >= $foto_min && $c <= $foto_max
		if($c > $foto_min) {
			if($c <= $foto_max) {
				echo "<td>";
				echo '<table class="dia"><tr><td>';
				echo "<a href='o riginal/".$data['path'].$f."' title='".$f."' rel='lightbox[1]' />";
				echo "<img src='thumb/".$data['path'].$f."' rel='thumb' alt='".$f."' ></a>";
				echo "</td></tr></table>";
				echo "<div class='smalldesc'>".$f."</div>";
				echo "</td>";
				//echo "ok";
				// echo "i: ".$i."<br>";
				$i++;
				echo "i: ".$i."<br>";
				echo "c: ".$c."<br><br>";
			}
		}
	}
	
	elseif(is_file($rep.$f) && $f != 'Thumbs.db') {
		if($c > $foto_min) {
			if($c <= $foto_max) {
				$i = 0;
				echo "</tr><tr>";
				echo "<td>";
				echo '<table class="dia"><tr><td>';
				echo "<a href='original/".$data['path'].$f."' title='".$f."' rel='lightbox[1]' />";
				echo "<img src='thumb/".$data['path'].$f."' rel='thumb' alt='".$f."' ></a>";
				echo "</td></tr></table>";
				echo "<div class='smalldesc'>".$f."</div>";
				echo "</td>";
				$i++;
				echo "i: ".$i."<br>";
				echo "c: ".$c."<br><br>";
			}
		
		}
    }
} 
echo '</tr>';
echo '</table>';
echo '</div>';

// affichage des liens vers les différentes pages
$k = 1;
echo"<table><tr>";
while ($k <= $nbpages) {
	echo "<td><a href='./galerie.php?name=".$name."&page=".$k."'>$k</a></td>";
	$k++;
	}
echo "</tr></table>";
?>

			</div>
		</div>
	</body>
</html>
