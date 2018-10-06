<?php
include_once ('dbconnection.php');
$sql = "Select * from company where status = 1 ";
$result = mysqli_query($conn,$sql);
$id=201650010;

$sql = "Select * from companiesapplied where studentID = 201650010 ";
$result1 = $conn->query($sql);
$companyID = array();
while($row=$result1->fetch_assoc())
{
    array_push($companyID,$row['companyID']);
}
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
                    <a class="nav-link active" href="viewcompanies.php">Placements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="viewsubjects.php">Subject Notes</a>
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
        <?php

        while($row = mysqli_fetch_array($result)) {

            ?>

            <div class="card">
                <div class="card-header" id="c<?php echo $row['id']; ?>">
                    <h5 class="mb-<?php echo $row['id']; ?>">
                        <button class="btn btn-link" data-toggle="collapse"  data-target="#collapse<?php echo $row['cname']; ?>"  aria-controls="collapse<?php echo $row['cname']; ?>">
                        <b><?php echo $row['cname']; ?></b>
                        <?php 
                        if(in_array($row['id'],$companyID))
                        {
                            $text = "Applied";
                            $enable = 'disabled';
                        }
                        else
                        {
                            $text = "Apply";
                            $enable = '';
                        }
                        ?>
                        <button class="btn btn-primary apply" id="<?php echo $row['id']; ?>" style="float: right" <?php echo $enable?>>
                        <?php echo $text ?>
                        </button>
                        </button>

                    </h5>
                </div>

                <div id="collapse<?php echo $row['cname']; ?>" class="collapse" aria-labelledby="<?php echo $row['id']; ?>" data-parent="#accordion">
                    <div class="card-body">
                    <img class="img-fluid rounded float-right" height="120px" width="120px" src="<?php echo $row['image'];?>" alt="Chania">

                        <label>Job Description: </label><a href="<?php echo $row['logo']; ?>" target='_blank'> click here</a><br>

                        <label>CTC:</label> <?php echo $row['ctc']; ?><br>
                        <label>Eligibility:</label> <?php echo $row['eligibility']; ?> <br>
                        <label>Date:</label> <?php echo $row['date']; ?><br>

                        
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
        $('.apply').click(function(){
            
            var companyID = $(this).attr('id');
            $.post("applyForCompany.php",
            {
                cid: companyID ,
                uid:201650010
            },
            function(data, status)
            {
                
                if(data.includes("failure"))
                {
                    alert('Failed');
                    
                }
                else if(data.includes("success"))
                {
                    var str = "#"+companyID;
                    $(str).text("Applied");
                    $(str).prop('disabled', true);
                }
            })
    })

        });
    

</script>


</body>
</html>

















