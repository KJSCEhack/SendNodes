

<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "kjsce";

$subject = $_POST['subject'];
$type = $_POST['type'];


$photo = $_FILES['notes'];
$photoFileName = $photo['name'];


$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}

$FilePath = "studyMaterial/" . basename($photoFileName);


if (move_uploaded_file($photo['tmp_name'], $FilePath)) {
    // Move succeed.
} else {
    // Move failed. Possible duplicate?
}


$sql = "INSERT into studymaterial (type,url,subject) values('$type','" . mysqli_real_escape_string($conn,$FilePath) . "','$subject')";





if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>