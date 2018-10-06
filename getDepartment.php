
<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "kjsce";
 
$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}


$sql = "SELECT name FROM department";
$result = mysqli_query($conn,$sql);
$t = array();
if ($result->num_rows > 0) {
	while($row=$result->fetch_assoc())
		array_push($t,$row);	
	echo json_encode($t);
    
} else {
    
}

?>