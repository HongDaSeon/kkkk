  		<div class='boxed'>
			<h2 class='title'>Liste des inscrits au tournoi!</h2>
			<div class='content'>


<?php
require_once './config.inc.php';
mysql_connect($CFG['server'],$CFG['login'], $CFG['pass']);

mysql_select_db($CFG['db']);

    $reponse = mysql_query('SELECT * FROM poker');
    $compt=1;
    
    while ($donnees = mysql_fetch_array($reponse))
    {
        echo "Participant n°$compt <br />";
        echo "Nom : <strong>${donnees['nom']} </strong><br />";
        echo "Pseudo :<strong> ${donnees['prenom']} </strong><br />";
        echo "Promo :<strong> ${donnees['promo']} </strong><br /><br />";
        $compt++;
    }

mysql_close();

?>
</div>
</div>