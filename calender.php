<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='fullcalendar-2.7.1/fullcalendar.css'>
	<script src='fullcalendar-2.7.1/lib/jquery.min.js'></script>
    <script src="js/bootstrap.min.js"></script>
    <script src='fullcalendar-2.7.1/lib/moment.min.js'></script>
	<script src='fullcalendar-2.7.1/fullcalendar.js'></script>
	<script type='text/javascript' src='fullcalendar-2.7.1/gcal.js'></script>
  
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
                    <a class="nav-link  active" href="calender.php">Calender</a>
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
        <div class="col-md-12">
	        <div id='calendar'></div>
        </div>
    </div>
    <script>
        $(document).ready(function() 
        {
            $('#calendar').fullCalendar({
                eventBackgroundColor: 'red',                               
                timeFormat: 'hh:mm a',
                eventRender: function(event, element) {
                        $(element).tooltip({title: event.title});             
                    },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                events: {
                          url: 'events.php',
                          type: 'POST',
                          data: {
                            studentID : 201650010
                          },
                          dataType: 'json',
                          error: function() {
                            alert('there was an error while fetching events!');
                          },
                        }
            })
        });
	</script>

</body>
</html>

















