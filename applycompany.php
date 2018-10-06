
<?php

include_once ('dbconnection.php');

$companyName = $_POST['cname'];
$ctc = $_POST['cctc'];
$eligibility = $_POST['celigible'];
$date = $_POST['date'];
$status = 1;
print_r("here");
$jdFile = $_FILES['cjd'];
$jdFileName = $jdFile['name'];

$logoFile = $_FILES['clogo'];
$logoFileName = $logoFile['name'];


$jdFilePath = "jd/" . basename($jdFileName);
$logoFilePath = "logo/" . basename($logoFileName);


if (move_uploaded_file($jdFile['tmp_name'], $jdFilePath)) {
    // Move succeed.
} else {
    // Move failed. Possible duplicate?
}


if (move_uploaded_file($logoFile['tmp_name'], $logoFilePath)) {
    // Move succeed.
} else {
    // Move failed. Possible duplicate?
}


$sql = "INSERT INTO company(cname,description,eligibility,ctc,logo,date,status) VALUES ('$companyName','" . mysqli_real_escape_string($conn,$jdFilePath) . "','$eligibility','$ctc','" . mysqli_real_escape_string($conn,$logoFilePath) . "','$date','$status')";
echo $sql."";
$conn->query($sql);

?>