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
</table>"
for(int i = 0; i < 7; i++) {
	
	echo "
	<table>
		<tr>
			<td>$restaurant->getName();</td>
			<td>$restaurant->getCategory();</td>
			<td>$restaurant->getCost();</td>
			<td>$restaurant->getCity();</td>
			<td>$restaurant->getState();</td>
		</tr>
	</table>";
}

?>

</body>
</html>