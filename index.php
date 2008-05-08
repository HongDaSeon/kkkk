<?php
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
	  <li><a href="./galerie.php">Galerie</a></li>
      </ul>   
    </div> 
   </div>   


<div id='content'>            
 
 
  <div id='sidebar'>
		<div class='boxed'>
			<h2 class='title'>L'album de famille</h2>
			<div class='content'>
			<div class="imageSlideshowHolder" id="imageSlideshowHolder">	
		<?php 
		for($i=1;$i<101;$i++)
		{ ?>
			<img src="img/photo_petit/image<?php echo rand(1,100);?>.jpg" alt='ImageA'/>	
			<?php
		}
			?>
				</div><!--fin du slide-->
		</div><!--fin du content-->
		</div><!--fin du boxed-->

				<script type="text/javascript">
		initImageGallery('imageSlideshowHolder')
		</script>
		
  		<div class='boxed'>
			<h2 class='title'>Les vidéos de famille</h2>
			<div class='content'>
			<div class='video'>	

<object type='application/x-shockwave-flash' data='swf/player_flv_multi.swf' width='320' height='240'>
<param name='movie' value='swf/player_flv_multi.swf' />
<param name='allowFullScreen' value='true' />
<param name='FlashVars' value='flv=/video/presentation.flv|/video/kaliente.flv&amp;title=Présentation des membres|Kaliente&amp;autoload=1&amp;margin=3&amp;bgcolor=fdf39a&amp;bgcolor1=fdf39a&amp;bgcolor2=ffd83f&amp;showstop=1&amp;showtime=2&amp;showfullscreen=1&amp;playercolor=ffd83f&amp;showmouse=autohide&amp;currentflvcolor=f1246A&amp;playlisttextcolor=003400' />
</object>
Choisissez votre vidéo dans la playlist (ce bouton <img src='img/playlist.jpg' alt='playlist' />)

			</div><!--fin du lecteur-->
		</div><!--fin du content-->
		</div><!--fin du boxed-->



    </div> <!--fin du sidebar-->

            
<div class='include'>  
    <?php
    
   $lien = array('news' => 'news.php',
					'equipe' => 'equipe.html',
					'suisunrebel' => 'rebelz.html',
					'partenaires' => 'partenaires.html',
					'livre' => 'livredor.php',
					'projet' => 'projet.html',
					'poker' => 'inscription_poker.php',
					'test' => 'test.html',
					'pres' => 'fiche.php',
					'soiree' => 'soiree.html'
					);
    $a = key($_GET);
      if(isset($lien[$a]))
      include $lien[$a];
      else include 'acceuil.html';
    ?>
</div>  

</div> <!--fin du content-->

      
      </body>


</html>