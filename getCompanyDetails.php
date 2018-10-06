<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "kjsce";

$conn = new mysqli($servername, $username, $password, $dbname);

	
				
		
	$return_arr = array();
	$sql = "Select * from company where status = 1 ";
	
	$result = mysqli_query($conn,$sql);
	
	$response = array(); 
	
	$response = array(); 
	
	while($row = mysqli_fetch_array($result)){
		$temp = array(); 
		$temp['id']=$row['id'];
		$temp['cname']=$row['cname'];
		$temp['description']=$row['description'];
		$temp['eligibility']=$row['eligibility'];
		$temp['ctc']=$row['ctc'];
		$temp['logo']=$row['logo'];
		$temp['date']=$row['date'];
			
		array_push($response,$temp);
	}

echo json_encode($response );
		
		

?>