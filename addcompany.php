<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
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
                    <a class="nav-link" href="viewsubjects.php">Subject Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewfaculty.php">Faculty Info.</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="viewextra.php">Extra Curricular</a>
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

    <div class="row">
       <div class="col-lg-3">

       </div>
        <div class="col-lg-6">

        <div class="card" style="border-color:blue">
            <div class="card-body">
                <form action="applycompany.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Comapany Name:</label>
                        <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter Company Name">
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlInput1">Upload Logo</label>
                        <input type="file" class="form-control-file" name="clogo" id="clogo">
                    </div>

<!--                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="cdescription" id="cdescription" rows="3"></textarea>
                    </div>
-->
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Job Description</label>
                        <input type="file" class="form-control-file"  name="cjd" id="cjd">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">CTC</label>
                        <input type="text" class="form-control" name="cctc" id="cctc" placeholder="Enter CTC">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Arrival Date</label>
                        <input type="datetime-local" class="form-control" name="date" id="date" placeholder="Enter CTC">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Eligibility</label>
                        <input type="text" class="form-control" name="celigible" id="celigible" placeholder="Enter Eligible Branches">
                    </div>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>





                </form>
            </div>
        </div>
    </div>


    </div>


</div>


</body>
</html>

















