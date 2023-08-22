<?php

include "db_connection.php";

?>

<html>
<head>
<title>Lab 1</title
</head>

<body>

<!-- display the table -->

<table border="2" cellspacing="0" cellpadding="15">
<thead>
<tr>
<th>S.N.</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php
	// fetch the users table from the database
	$sql = "SELECT * FROM users;";
	$result = $connection->query($sql);
	while ($row = $result->fetch_assoc()) {
?>
		<tr>
		<td><?= $row['id'] ?> </td>
		<td><?= $row['name'] ?> </td>
		<td><?= $row['email'] ?> </td>
		<td><a href="./upload_image.php?id=<?= $row['id'] ?>">Add image</a></td>
		</tr>
<?php
	}
?>


</tbody>
</table>

</body>
</html>
