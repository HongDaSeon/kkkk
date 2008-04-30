<table>

<?php
// page galerie (test)

// Connection à MySQL
mysql_connect("localhost", "root", "");

// Selection de la BDD
mysql_select_db("kaliente");

//fichier de creation de la gallerie

$rep = 'thumb/'; 
$dir = opendir($rep);

echo '<div class="center">';
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

</table>


