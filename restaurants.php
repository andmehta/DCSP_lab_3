<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">

	<style>
		td, th {
			width: 100px;
			border: 1px solid;
			text-align: center;
			padding: 0.5em;
		}
	</style>
</head>

<body>
<h1>Current Database</h1>

<p>Our current restaurant database includes the following restaurants.</p>
<?php

require 'login.php';

echo "
<table>
	<tr>
		<th>Name</th>
		<th>Category</th>
		<th>Cost</th>
		<th>City</th>
		<th>State</th>
	</tr>
</table>";
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error)
	die($conn->connect_error);

$query = "SELECT * FROM restaurants";
$result = $conn->query($query);
while($row = $result->fetch_array()){
	$name = $row['name'];
	$category = $row['category'];
	$cost = $row['cost'];
	$city = $row['city'];
	$state = $row['state'];
	
	echo "
	<table>
		<tr>
			<td>$name;</td>
			<td>$category;</td>
			<td>$cost;</td>
			<td>$city</td>
			<td>$state;</td>
		</tr>
	</table>";
}

?>

</body>
</html>