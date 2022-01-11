<?php
$stu_num = $_POST['num'];
$stu_name = $_POST['name'];

 
include 'config.php';

$sql = "UPDATE studentsport SET name = '{$stu_name}' WHERE num = {$stu_num}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>