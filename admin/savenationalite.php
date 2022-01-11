<?php

 $stu_nom = $_POST['nom_nationalite'];
// $stu_address = $_POST['saddress'];
// $stu_class = $_POST['class'];
//  $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "INSERT INTO studentnationalite(nom) VALUES ('{$stu_nom}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/admin/home.php");

mysqli_close($conn);

?>
