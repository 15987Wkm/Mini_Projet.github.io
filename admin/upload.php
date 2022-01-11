<?php  
require ("config.php");

//btn ajout
if (isset($_POST['btnAjout']))
{
    
//ajout d'image
$photo= $FILES['img']['name'];
$upload = "picture/".$photo;

move_uploaded_file($FILES['img']['tmp_name'], $upload);

//requete ajout img
$sql = "INSERT INTO student (photo) VALUES ('$photo')";
if (mysqli_query($conn, $sql));
	echo "<h1>INSSERT AVEC SUCCEE</h1>";
}
else {echo "<h1>ERROR</h1>";}

?>