
<?php

include('dbconnection.php');
$uid = $_POST['uid'];
$cid = $_POST['cid'];
$sql = " SELECT studentID FROM extracirapplied WHERE studentID='$uid' and extracirid='$cid' ";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
echo json_encode(array("status"=>"failure"));
    
} else {
    
	$sql = " INSERT into extracirapplied(extracirid,studentID) values ($cid,$uid)";
    $conn->query($sql);
	echo json_encode(array("status"=>"success"));
}

?>