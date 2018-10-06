
<?php

include('dbconnection.php');
$uid = $_POST['uid'];
$cid = $_POST['cid'];
$sql = " SELECT studentID FROM companiesapplied WHERE studentID='$uid' and companyID='$cid' ";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
echo json_encode(array("status"=>"failure"));
    
} else {
    
	$sql = " INSERT into companiesapplied values ('$uid','$cid')";
	$conn->query($sql);
	echo json_encode(array("status"=>"success"));
}

?>