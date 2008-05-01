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
						<a href='./galerie.php?name=paris'>Kaliente à Paris</a><br><br>
						<!--<a href='./galerie.php?name=test2'>London</a><br><br>
						<a href='./galerie.php?name=test3'>Back To School</a><br><br>
						<a href='./galerie.php?name=test'>Test</a><br><br>
						<a href='./galerie.php?name=test'>Test</a><br><br>-->
					</div>
				</div>
			</div>
			
		<div class='include'>
	
   <?php 
//fichier de creation de la gallerie
require_once './config.inc.php';

mysql_connect($CFG['server'],$CFG['login'], $CFG['pass']);

mysql_select_db($CFG['db']);

if(isset($_GET['name'])) {

	$name = $_GET['name'];
	
	$rep = mysql_query("
		SELECT `id`,`path`
		FROM `galerie`
		WHERE `nom` = '$name'
		");
		
	if(!empty($rep)) {	
		$data = mysql_fetch_array($rep);
		// if(empty($data['id'])) 
			// $data['id'] = 1;  // On fixe un id de base		
	}
	else {
		
	}
	
	
}
if(!isset($data['path']))
	$data['path'] = 'kaliente_paris/'; // Page par defaut

$rep = 'thumb/'.$data['path'];
$dir = opendir($rep);
$i = 0; // increment boucle (4 colones par lignes)

echo "<div class='center'>";
echo '<table class="container">';
echo '<tr>';

while ($f = readdir($dir)) {
   if(is_file($rep.$f) AND $f != 'Thumbs.db' AND $i < 5) {
		echo "<td>";
		echo '<table class="dia"><tr><td>';
		echo "<a href='original/".$data['path'].$f."' title='".$f."' rel='lightbox[1]' />";
		echo "<img src='thumb/".$data['path'].$f."' rel='thumb' alt='".$f."' ></a>";
		echo "</td></tr></table>";
		echo "<div class='smalldesc'>".$f."</div>";
		echo "</td>";
		$i++;
   }
   elseif(is_file($rep.$f) AND $f != 'Thumbs.db' AND $i = 5) {
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
   }
} 
echo '</tr>';
echo '</table>';
echo '</div>';
?>

			</div>
		</div>
	</body>
</html>
