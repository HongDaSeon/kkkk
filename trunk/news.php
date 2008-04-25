<?php
mysql_connect("db1094.1and1.fr", "dbo216509682", "x63ZBa7Y");

mysql_select_db("db216509682");

$retour = mysql_query('SELECT * FROM news ORDER BY id DESC LIMIT 0, 5');

while ($donnees = mysql_fetch_array($retour))
{
?>
  		<div class='boxed'>

<div class="news">
    <h3>
    			<h2 class='title'><?php echo $donnees['titre']; ?></h2>
			<div class='content'>

     <?php /*   <em>le <?php echo date('d/m/Y à H\hi', $donnees['timestamp']); ?> 
        <?php echo 'par $donnees['pseudo']' ?></em>
        
        
        */?>

    </h3>
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