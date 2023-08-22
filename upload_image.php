<?php
	include "db_connection.php";
	$user = $_GET['id'];

	// run the script below if a file has been submitted
	print_r($_POST);
	// if submit button was clicked
	if (isset($_POST['submit'])) {
		// check if file was submitted
		if (isset($_FILES)) {
				$filename = time() . "_" . $_FILES['image']['name'];
				$tmp_file = $_FILES['image']['tmp_name'];
				echo $filename, $tmp_file;
				// upload the file to the server
				if (move_uploaded_file($tmp_file, 'uploads/'.$filename)) {
					echo "File uploaded successfully!";
				} else {
					echo "Failed to upload the file!";
				}
				// save the image name to the database
				$sql = "INSERT INTO gallery(user_id, image) values('$user', '$filename')";
				$connection->query($sql);

		}
	}

?>

<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="image"><br><br>
	<input type="submit" name="submit">
</form>

