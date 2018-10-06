<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "kjsce";

$conn = new mysqli($servername, $username, $password, $dbname);

	
	$return_arr = array();
	$sql = "select g.fname, g.lname, g.role, g.subjectID, s.name 
	FROM (SELECT f.fname, f.lname, t.role, t.subjectID FROM `faculty_info` f, teacherassistant t WHERE f.id= t.teacherID) g, subject s
	WHERE g.subjectID = s.id";
	
	$result = mysqli_query($conn,$sql);
	
	$response = array(); 
	
	
	while($row = mysqli_fetch_array($result)){
		$temp = array(); 
		$temp['fname']=$row['fname'];
		$temp['lname']=$row['lname'];
		$temp['role']=$row['role'];
		$temp['sname']=$row['name'];
			
		array_push($response,$temp);
	}

echo json_encode($response );
		
		

?>