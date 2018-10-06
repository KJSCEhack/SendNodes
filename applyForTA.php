
<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "kjsce";


//$uid = $_POST['uid'];
//$roleid = $_POST['roleID'];

$uid = "2016240065";
$roleid = "2";

$myObj = new \stdClass();
 
$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}


$sql = " SELECT uid FROM teacherassistantapplied WHERE uid='$uid' and roleID='$roleid' ";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
$myObj->status = "Already applied";
    
} else {
    
	$sql = " INSERT into teacherassistantapplied values ('$uid','$roleid')";
	$conn->query($sql);
	$myObj->status = "Applied";
}
$myJSON = json_encode($myObj);
echo $myJSON;

?>