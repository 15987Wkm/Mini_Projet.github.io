<html>
<head>
	<title></title>
</head>
<body>
	<h1>DATA</h1>
	<hr>
	<table border="1">
		<tr>
			
		<th>num</th>
		<th>Name
		</tr>
	<?php 
require 'config.php';
$requete="SELECT * from studentsport";
$query=mysqli_query($conn,$requete);
while($rows=mysqli_fetch_assoc($query))
	{$num=$rows['num'];
     echo "<tr>";
     echo "<td>".$rows['num']."</td>";
     echo "<td>".$rows['name']."</td";
    
     echo "</tr>";

	}
?>
</table>
</body>
</html>