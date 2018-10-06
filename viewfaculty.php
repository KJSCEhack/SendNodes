<?php
include_once ('dbconnection.php');
$sql = "Select * from faculty_info where departmentNo = 'Information Technology' ";
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
                    <a class="nav-link" href="viewsubjects.php">Subject Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active" href="viewfaculty.php">Faculty Info.</a>
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
        <?php

        while($row = mysqli_fetch_array($result)) {

            ?>

            <div class="card">
                <div class="card-header" id="c<?php echo $row['id']; ?>">
                    <h5 class="mb-<?php echo $row['id']; ?>">
                        <button class="btn btn-link" data-toggle="collapse"  data-target="#collapse<?php echo $row['id']; ?>"  aria-controls="collapse<?php echo $row['cname']; ?>">
                        <b><?php echo $row['fname'].' '.$row['lname']; ?></b>
                    </h5>
                </div>

                <div id="collapse<?php echo $row['id']; ?>" class="collapse" aria-labelledby="<?php echo $row['id']; ?>" data-parent="#accordion">
                    <div class="card-body">

                        <img class="img-fluid rounded float-right" src="<?php echo $row['url']?>" alt="Chania">

                        <label>Full Name:</label> <?php echo $row['fname'].' '.$row['lname']; ?>    <br>
                        <label>Department:</label> <?php echo $row['departmentNo']; ?> <br>
                        <label>Title:</label> <?php echo $row['position']; ?><br>
                        <label>Domain Specialization:</label> <?php echo $row['domain']; ?><br>

                        
                    </div>
                </div>
            </div>



            <?php
        }

        ?>

    </div>



</div>

<script>

    $(document).ready(function(){

        //$("#collapseOne").collapse();
        

        });
    

</script>


</body>
</html>

















