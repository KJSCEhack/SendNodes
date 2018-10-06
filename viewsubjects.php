<?php
include_once ('dbconnection.php');
$sql = "Select * from studentsubject where studentID = 2001650010 ";
$result = mysqli_query($conn,$sql);
$id=201650010;



?>

<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <style>

            label{
                font-weight:bold;
            }



    </style>

</head>
<body>


<!-- Navbar-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark static-top">

            <a class="navbar-brand" href="#">StudentPortal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="calender.php">Calender</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewcompanies.php">Placements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="viewsubjects.php">Subject Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewfaculty.php">Faculty Info.</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewextra.php">Extra Curricular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewstats.php">Statistics</a>
                </li>
            </ul>
            <ul class="navbar-nav ">
            <li class="nav-item">
                    <a class="nav-link" href="login.php">Logout</a>
                </li>
            </ul>
        </nav>
        <!-- ./Navbar -->

<div class="container-fluid">
    <!-- Write Your code Here -->

    <div id="accordion">
 <?php   $sql = "select * from studentsubject where studentid=$id";
$result = $conn->query($sql);
$events = array();
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()) 
    {
        $subid = $row['subjectid'];
        $sql5 = "select * from subject where id=$subid";
        $result5 = $conn->query($sql5);
        $row5 = $result5->fetch_assoc();
        $subjectname = $row5['name'];
        $sql2 = "select * from studymaterial where subjectid=$subid";
        $result2 = $conn->query($sql2);
        ?>
            <div class="card">
                <div class="card-header" id="c<?php echo $row['subjectid']; ?>">
                    <h5 class="mb-<?php echo $row['subjectid']; ?>">
                        <button class="btn btn-link" data-toggle="collapse"  data-target="#collapse<?php echo $row['id']; ?>"  aria-controls="collapse<?php echo $row['cname']; ?>">
                        <b><?php echo $subjectname?></b>
                    </h5>
                </div>

                <div id="collapse<?php echo $row['subjectid']; ?>" class="collapse" aria-labelledby="<?php echo $row['subjectid']; ?>" data-parent="#accordion">
                    <div class="card-body">
                    <?php
                    while($row2 = $result2->fetch_assoc())
                            {
                                $notestitle = $row2['notestitle'];
                                $url = $row2['url'];
                            ?>
                       <?php echo $row2['notestitle']; ?>
                        <a href="<?php echo $row2['url']; ?>" target='_blank'> click here</a><br>
    <?php
                            }?>
                        
                    </div>
                </div>
                <?php }
                    }?>
            </div>



    </div>



</div>

<script>

    $(document).ready(function(){

        //$("#collapseOne").collapse();
        

        });
    

</script>


</body>
</html>

















