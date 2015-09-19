<?php
	// echo $_FILES;

$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);

echo 'copying files...'.$uploadfile.'<br>';

if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], './mynewfile.jpg')) {
	echo "File is valid, and was successfully uploaded.<br>";
} else {
	echo "There were an Error trying to upload the file.<br>";
}

echo '<br>end of response<br>';
?>