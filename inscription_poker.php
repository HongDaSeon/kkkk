
<form method="post" action="index.php?poker">
      <fieldset>
       <legend>Inscription pour le tournois de poker</legend>
<p>

    Un jolie text blabla qui explique le tournois <br /> <br />
  <label for="pseudo">Pseudo : </label> <input type="text" name="pseudo" id='pseudo' /> <br />
  <label for="nom">Nom : </label> <input type="text" name="nom" id='nom' /><br />
  <label for="prenom">Prénom : </label> <input type="text" name="prenom" id='prenom' /><br />
            
             <label for="promo">Promo :</label>
             <select name="promo" id="promo">
           <option value="2k10" selected="selected">2k10</option>
           <option value="2k9">2k9</option>
           <option value="2k8">2k8</option>
           <option value="CPI2">CPI2</option>
           <option value="CPI1">CPI1</option>
           <option value="Anciens">Anciens</option>
       </select>
<br />
  <label for="mail">eMail : </label> <input type="text" name="mail" id='mail' /><br />
<br />
  <label for="password">Mot de passe fournit sur le mail de votre webmail eistiens : </label><br /> <input type="password" name="password" id='password' />

<br />
<br />
            <input type="submit" value="Envoyer" />

</p>

</fieldset>
</form>



<?php

mysql_connect("localhost", "root", "");

mysql_select_db("kaliente");

 
if (
    isset($_POST['pseudo'])
    AND isset($_POST['nom']) 
    AND isset($_POST['prenom'])
    AND isset($_POST['promo']) 
    AND isset($_POST['password'])
    AND isset($_POST['mail'])
    )

{

    $pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo'])); 
    $nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
    $prenom = mysql_real_escape_string(htmlspecialchars($_POST['pseudo'])); 
    $promo = mysql_real_escape_string(htmlspecialchars($_POST['promo'])); 
    $mail = mysql_real_escape_string(htmlspecialchars($_POST['mail']));
    $password = mysql_real_escape_string(htmlspecialchars($_POST['password'])); 
    $pass="kthxbye";
    if($password==$pass)
    {
    $reponse = mysql_query('SELECT * FROM poker');
    $compt=0;
    while ($donnees = mysql_fetch_array($reponse))
    {
      
    if($donnees['nom']==$nom AND $donnees['prenom']==$prenom AND $donnees['promo']==$promo)
        {
        $compt++;
        }
    }
    if ($compt<1)
        { 
        mysql_query("INSERT INTO poker VALUES('', '$pseudo', '$nom', '$prenom', '$promo', '$mail')");
        echo "Inscription enregistré";
        }
        else
        {
        echo "utilisateur déjà enregistré";
        echo "si ce n'est pas le cas, pas de problème, vous pourrez vous inscrire avec nous lors de la journée de campagne !<br /> ou m'envoyer un mail a anarchyisborn@free.fr";
        }

    }
    else
        echo "Veuillez entrer le bon mot de passe! <br />Si vous ne vous en souvenez plus, ou alors vous avez supprimer le mail, pas de panique! Deux choix s'offre a vous : <br />1/Vous rencontrez une personne de notre équipe et vous lui demandez le mot de passe <br />
        2/Vous attendez la journée de campagne et on vous inscrit en direct";
        

}
mysql_close();


?>