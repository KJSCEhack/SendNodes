

<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "kjsce";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$deptNo = $_POST['deptNo'];
$domain = $_POST['domain'];
$position = $_POST['position'];
$publication = $_POST['publication'];




$photo = $_FILES['photo'];
$photoFileName = $photo['name'];


$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}

$FilePath = "faculty/" . basename($photoFileName);


if (move_uploaded_file($photo['tmp_name'], $FilePath)) {
    // Move succeed.
} else {
    // Move failed. Possible duplicate?
}


$sql = "INSERT into faculty_info (fname,lname,photo,departmentNo,domain,position,publication) values('$fname','$lname','" . mysqli_real_escape_string($conn,$FilePath) . "','$deptNo','$domain','$position','$publication')";





if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>