
    <p class="pages">

 

<?php

mysql_connect("localhost", "root", "");

mysql_select_db("kaliente");

 
if (isset($_POST['pseudo']) AND isset($_POST['promo']) AND isset($_POST['message']))

{

    $pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo'])); 
    $promo = mysql_real_escape_string(htmlspecialchars($_POST['promo'])); 
    $message = mysql_real_escape_string(htmlspecialchars($_POST['message'])); 
    $message = nl2br($message);


    mysql_query("INSERT INTO livreor VALUES('', '$pseudo', '$promo', '$message')");

}

 

$nombreDeMessagesParPage = 10;
$retour = mysql_query('SELECT COUNT(*) AS nb_messages FROM livreor');
$donnees = mysql_fetch_array($retour);
$totalDesMessages = $donnees['nb_messages'];
$nombreDePages  = ceil($totalDesMessages / $nombreDeMessagesParPage);
echo 'Page : ';

for ($i = 1 ; $i <= $nombreDePages ; $i++)

{

    echo '<a href="index.php?livre&page=' . $i . '">' . $i . '</a> ';

}

?>

 

</p>

 

<?php

if (isset($_GET['page']))
{
        $page = $_GET['page'];
}

else
{
        $page = 1;
}

$premierMessageAafficher = ($page - 1) * $nombreDeMessagesParPage;

$reponse = mysql_query('SELECT * FROM livreor ORDER BY id DESC LIMIT ' . $premierMessageAafficher . ', ' . $nombreDeMessagesParPage);


while ($donnees = mysql_fetch_array($reponse))

{
  echo '<p><strong>' . $donnees['pseudo'] .' ('. $donnees['promo'] . ') ' . '</strong> a écrit :<br />' . stripslashes($donnees['message']) . '</p>';
}

 

mysql_close();

?>

   <form method="post" action="index.php?livre">
      <fieldset>

       <legend>Dites le nous que vous votez pour nous!</legend>
        <p>

            <label for="pseudo">Pseudo :</label>
            <input name="pseudo" /><br />    
        
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

            Message :<br />

            <textarea name="message" rows="8" cols="60"></textarea><br />

            <input type="submit" value="Envoyer" />

        </p>
      </fieldset>
    </form>

