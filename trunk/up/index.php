<?php
// Fichier d'upload

if( isset($_POST['upload']) ) // si formulaire soumis
{
    $content_dir = './content/'; // dossier où sera déplacé le fichier

    $tmp_file = $_FILES['fichier']['tmp_name'];

    if( !is_uploaded_file($tmp_file) )
    {
        exit("Le fichier est introuvable");
    }

    // on vérifie maintenant l'extension
    // $type_file = $_FILES['fichier']['type'];

    // if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
    // {
        // exit("Le fichier n'est pas une image");
    // }

    // on copie le fichier dans le dossier de destination
    $name_file = $_FILES['fichier']['name'];

	if( preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $name_file) )
	{
	    exit("Nom de fichier non valide");
	}
	else if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
	{
	    exit("Impossible de copier le fichier dans $content_dir");
	}
	
    echo "Le fichier a bien été uploadé";
}
?>

<form method="post" enctype="multipart/form-data" action="index.php">
<p>
<input type="file" name="fichier" size="30">
<input type="submit" name="upload" value="Uploader">
</p>
</form>