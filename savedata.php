<?php

 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];
 $stu_sexe = $_POST['ssexe'];
 $stu_statut = $_POST['sstatut'];
$stu_p1 = $_POST['typ_permis1'];
$stu_p2 = $_POST['typ_permis2'];
$stu_p3 = $_POST['typ_permis3'];
 
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "INSERT INTO student(sname,saddress,sclass,sphone,ssexe,sstatut,typ_permis1,typ_permis2,typ_permis3) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}','{$stu_sexe}','{$stu_statut}','{$stu_p1}','{$stu_p2}','{$stu_p3}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
