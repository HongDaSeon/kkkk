<h3><a href="liste_news.php">Retour à la liste des news</a></h3>

<?php
require_once './config.inc.php';

mysql_connect($CFG['server'],$CFG['login'], $CFG['pass']);

mysql_select_db($CFG['db']);

if (isset($_GET['modifier_news']))
{
    $_GET['modifier_news'] = mysql_real_escape_string(htmlspecialchars($_GET['modifier_news']));
    $retour = mysql_query('SELECT * FROM news WHERE id=\'' . $_GET['modifier_news'] . '\'');
    $donnees = mysql_fetch_array($retour);
    $titre = stripslashes($donnees['titre']);
    $contenu = stripslashes($donnees['contenu']);
    $pseudo= stripslashes($donnees['pseudo']);
    $id_news = $donnees['id'];
}

else
{
    $titre = '';
    $contenu = '';
    $pseudo= '';
    $id_news = 0;
}

?>

<form action="liste_news.php" method="post">
<p>Titre : <input type="text" size="30" name="titre" value="<?php echo $titre; ?>" /></p>
<p>Pseudo : <input type="text" name="pseudo" value="<?php echo $pseudo; ?>" /></p>
<p>

    Contenu :<br />

    <textarea name="contenu" cols="50" rows="10">

    <?php echo $contenu; ?>

    </textarea><br />

   

    <input type="hidden" name="id_news" value="<?php echo $id_news; ?>" />

    <input type="submit" value="Envoyer" />
</p>

</form>