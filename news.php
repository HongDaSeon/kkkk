<?php
require_once './config.inc.php';
mysql_connect($CFG['server'],$CFG['login'], $CFG['pass']);

mysql_select_db($CFG['db']);

$retour = mysql_query('SELECT * FROM news ORDER BY id DESC LIMIT 0, 5');

while ($donnees = mysql_fetch_array($retour))
{
?>
 <div class="news">

  		<div class='boxed'>

    			<h2 class='title'><?php echo $donnees['titre']; ?></h2>
			<div class='content'>

     <?php /*   <em>le <?php echo date('d/m/Y à H\hi', $donnees['timestamp']); ?> 
        <?php echo 'par $donnees['pseudo']' ?></em>
        
        
        */?>

    <p>
    <?php
    $contenu = nl2br(stripslashes($donnees['contenu']));
    echo $contenu;
    ?>
    </p>

</div>
</div>

<?php
}
?>
		<div class='boxed'>
			<h2 class='title'>Sans eux nous n'aurions pas pu vous offrir ces journées...</h2>
			<div class='content'>
<!-- PREMIERE LIGNE, les larges-->
<a href='http://www.paintball-connexion.com/'>
    <img src='img/partenaires/paintball.jpg' alt='Paintballconnexion'/>
     </a>
<a href='http://www.goldenvoyages.com/'>
    <img src='img/partenaires/goldenvoyage.jpg' alt='GoldenVoyage'/>
     </a>
<a href='http://www.jules.fr/'>
    <img src='img/partenaires/jules.jpg' alt='Jules'/>
     </a>
<a href='http://www.decathlon.fr/'>
    <img src='img/partenaires/decat.gif' alt='Decathlon'/>
     </a>
<a href='http://www.defense.gouv.fr/air'>
    <img src='img/partenaires/armeair.jpg' alt="Armé de l'air"/>
     </a>

     
<br />
<!-- DEUXIEME LIGNE, les haut-->
<a href='http://www.danone.com/'>
    <img src='img/partenaires/danone.jpg' alt='Danone'/>
     </a>
<a href='http://www.ville-cergy.fr/'>
    <img src='img/partenaires/cergy_pontoise.gif' alt='Ville de cergy'/>
     </a>
<a href='http://www.laserquest-cergy.com/'>
    <img src='img/partenaires/laserquest.jpg' alt='Laser Quest'/>
     </a>
<a href='http://www.burnenergydrink.fr/'>
    <img src='img/partenaires/burn.jpg' alt='Burn'/>
     </a>
<a href='http://www.manix.net/'>
    <img src='img/partenaires/manix.jpg' alt='Manix'/>
     </a>
<a href='http://www.livepoker-mag.com/'>
    <img src='img/partenaires/livepoker.jpg' alt='Poker Live'/>
     </a>
<a href='http://cbc95.dragons.free.fr/'>
    <img src='img/partenaires/cbc.jpg' alt='Courdimanche Billard Club'/>
     </a>

<br />
<!-- TRoisieme LIGNE, les autres-->

<a href='http://www.movingcergy.com/'>
    <img src='img/partenaires/moving.gif' alt='Moving'/>
     </a>
<a href='http://www.defense.gouv.fr/marine'>
    <img src='img/partenaires/marine.gif' alt='La marine'/>
     </a>
<a href='http://www.bowlingcergy.fr/'>
    <img src='img/partenaires/bowling.gif' alt='Bowling Cergy'/>
     </a>
<a href='http://www.kipling.com/'>
    <img src='img/partenaires/kipling.jpg' alt='Kipling'/>
     </a>
<a href='http://www.defense.gouv.fr/terre'>
    <img src='img/partenaires/arme.jpg' alt='Armé de terre'/>
     </a>
</div>
</div>

</div>
