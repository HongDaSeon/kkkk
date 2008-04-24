<h2><a href="rediger_news.php">Ajouter une news</a></h2>
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("kaliente");

if (isset($_POST['titre']) AND isset($_POST['contenu']))
{
    $titre = addslashes($_POST['titre']);
    $contenu = addslashes($_POST['contenu']);
    $pseudo = $_POST['pseudo'];
    if ($_POST['id_news'] == 0)
    {
        mysql_query("INSERT INTO news VALUES('', '" . $titre . "', '" . $contenu . "', '" . time() . "','" . $pseudo ."')");
    }
    else
    {
        $_POST['id_news'] = addslashes($_POST['id_news']);
        mysql_query("UPDATE news SET titre='" . $titre . "', contenu='" . $contenu . "' , pseudo ='". $pseudo ."' WHERE id='" . $_POST['id_news'] . "'");
    }
}

if (isset($_GET['supprimer_news'])) 
{
    $_GET['supprimer_news'] = addslashes($_GET['supprimer_news']);
    mysql_query('DELETE FROM news WHERE id=\'' . $_GET['supprimer_news'] . '\'');
}
?>
<table><tr>
<th>Modifier</th>
<th>Supprimer</th>
<th>Titre</th>
<th>Date</th>
</tr>
<?php
$retour = mysql_query('SELECT * FROM news ORDER BY id DESC');
while ($donnees = mysql_fetch_array($retour))
{
?>
<tr>
<td><?php echo '<a href="rediger_news.php?modifier_news=' . $donnees['id'] . '">'; ?>Modifier</a></td>
<td><?php echo '<a href="liste_news.php?supprimer_news=' . $donnees['id'] . '">'; ?>Supprimer</a></td>
<td><?php echo stripslashes($donnees['titre']); ?></td>
<td><?php echo date('d/m/Y', $donnees['timestamp']); ?></td>
</tr>
<?php
}
?>
</table>