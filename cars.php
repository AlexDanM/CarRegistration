<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>AM REUSIT!!! NU POT SA CRED CA A MERS!!!</h1>
	<?php  
		$serverName = "localhost:3307";
		$userName = "root";
		$password = "";
		$dbName = "admin";





		$conn = new mysqli($serverName,$userName,$password,$dbName);
		if($conn->connect_error) {
			die("Connection failed".$conn->connect_error);
		}
		$sql = "SHOW TABLES FROM `admin`";
$result = mysqli_query($conn,$sql);
$print = mysqli_num_rows($result);
$row1 = mysqli_fetch_array($result);
if($result) {
    echo "3. {$print} tables found in admin";
    echo $row1[0];
}
		$query = mysqli_query($conn,'SELECT * FROM masini');
		if (!$query) {
   		 printf("Error: %s\n", mysqli_error($conn));
    	exit();
}

	?>
		<table id = "masini">
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Car Brand</th>
				<th>Car Model</th>
				<th>Manufactured</th>
				<th>Color</th>
				<th>Fuel</th>
			</tr>
		
	<?php
		while($row = mysqli_fetch_array($query)){
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['prenume']."</td>";
			echo "<td>".$row['nume']."</td>";
			echo "<td>".$row['marca']."</td>";
			echo "<td>".$row['model']."</td>";
			echo "<td>".$row['an']."</td>";
			echo "<td>".$row['culoare']."</td>";
			echo "<td>".$row['combustibil']."</td>";
			echo "</tr>";
		}
		mysqli_close($conn);
	?>
</table>
</body>
</html>