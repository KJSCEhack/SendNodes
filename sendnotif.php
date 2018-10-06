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

        <div class="card">
            <div class="card-body">
            <div class="alert alert-success" role="alert"  id="message-final">
                Message Successfully Sent
            </div>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Message</label>
                        <textarea class="form-control" name="cname" id="cname" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Select Year to send the message to:</label>
                        <select class="form-control" id="sel1">
                            <option>Fourth Year</option>
                            <option>Third Year</option>
                            <option>Second Year</option>
                            <option>First Year</option>
                        </select>
                        </div>
                    <button type="button" id="submit" name="submit" class="btn btn-primary">Submit</button>





                </form>
            </div>
        </div>
    </div>


    </div>


</div>

<script>

    $(document).ready(function(){
        $("#message-final").toggle();
        $('#submit').click(function(){
            var textValue = '';
            textValue = $("#cname").val();
            flag1=false;
            flag2=false;
            $.post("sendMail.php",
            {
                msg:  textValue
            },
            function(data, status)
            {
                
                if(data.includes("failure"))
                {
                    alert('Failed');
                    
                }
                else if(data.includes("success"))
                {
                    flag1=true;
                }
            });
            $.post("sendmessage.php",
            {
                msg:  textValue
            },
            function(data, status)
            {
                
                if(data.includes("failure"))
                {
                    alert('Failed');
                    
                }
                else if(data.includes("success"))
                {
                    flag2=true;
                }
            });

            if(flag1 && flag2)
            {
                console.log('Done.');
                $("#message-final").toggle();
            }
    });
   
    });

</script>

</body>
</html>

















