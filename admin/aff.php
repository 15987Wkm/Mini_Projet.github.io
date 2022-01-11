<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>DATA</h1>
	<hr>
	<table border="1">
		<tr>
			
		<th>Id</th>
		<th>Nom
		</tr>
	<?php 
require 'config.php';
$requete="SELECT * from studentnationalite";
$query=mysqli_query($conn,$requete);
while($rows=mysqli_fetch_assoc($query))
	{$id=$rows['id'];
     echo "<tr>";
     echo "<td>".$rows['id']."</td>";
     echo "<td>".$rows['nom']."</td";
    
     echo "</tr>";

	}
?>
</table>
</body>
</html>