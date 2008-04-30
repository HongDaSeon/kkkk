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
		
	
   <?php 
// page galerie (test)

// Connection à MySQL
//mysql_connect("localhost", "root", "");

// Selection de la BDD
//mysql_select_db("kaliente");

//fichier de creation de la gallerie

$rep = 'thumb/'; 
$dir = opendir($rep);

echo "<div class='center'>";
echo '<table class="container">';
echo '<tr>';
echo '<td>';

while ($f = readdir($dir)) {
   if(is_file($rep.$f) AND $f != 'Thumbs.db') {
		echo "<td>";
		echo '<table class="dia"><tr><td>';
		echo "<a href='original/".$f."' title='".$f."' rel='lightbox[1]' />";
		echo "<img src='thumb/".$f."' rel='thumb' alt='".$f."' ></a>";
		echo "</td></tr></table>";
		echo "<div class='smalldesc'>".$f."</div>";
		echo "</td>";
   }
} 

?>


