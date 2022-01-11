<?php
$stu_id = $_POST['id'];
$stu_nom = $_POST['nom'];

 
include 'config.php';

$sql = "UPDATE studentnationalite SET nom = '{$stu_nom}' WHERE id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>