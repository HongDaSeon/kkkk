<?php

mysql_connect("localhost", "root", "");

mysql_select_db("kaliente");

$retour = mysql_query('SELECT * FROM news ORDER BY id DESC LIMIT 0, 5');

while ($donnees = mysql_fetch_array($retour))
{
?>

<div class="news">
    <h3>
        <?php echo $donnees['titre']; ?>
        <em>le <?php echo date('d/m/Y à H\hi', $donnees['timestamp']); ?> 
        par <?php echo $donnees['pseudo']   ?></em>
        

    </h3>
    <p>
    <?php
    $contenu = nl2br(stripslashes($donnees['contenu']));
    echo $contenu;
    ?>
    </p>

</div>

<?php
}
?>