<?php
include_once ('dbconnection.php');
$sql = "Select * from faculty_info where departmentNo = 'Information Technology' ";
$result = mysqli_query($conn,$sql);
$id=201650010;


?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

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
                    <a class="nav-link" href="viewfaculty.php">Faculty Info.</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewextra.php">Extra Curricular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="viewstats.php">Statistics</a>
                </li>
                
            </ul>
            <ul class="navbar-nav ">
            <li class="nav-item">
                    <a class="nav-link" href="login.php">Logout</a>
                </li>
            </ul>
        </div>
</nav>
        <!-- ./Navbar -->

<div class="container-fluid">
    
    
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <canvas id="donut" width="270px" height="270px"></canvas>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <canvas id="bar" width="270px" height="270px"></canvas>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <canvas id="line" width="270px" height="270px"></canvas>
        </div>
    </div>
<script>
$(function(){

    //get the doughnut chart canvas
    var ctx1 = $("#donut");
    ctx1.height=200;
    //doughnut chart data
    var data1 = {
        labels: ["attended", "missed"],
        datasets: [
            {
                data: [1, 2],
                backgroundColor: [
                    "#155E63",
                    "#BB6589"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };

    
    var options = {
        responsive: true,
        maintainAspectRatio : false,

        title: {
            display: true,

            position: "top",
            text: "Lecture Attendence",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Chart class object
    var chart1 = new Chart(ctx1, {
        type: "doughnut",
        data: data1,
        options: options
    });

    var ctx = document.getElementById("bar").getContext('2d');
    ctx.height=275;
    var myChart = new Chart(ctx, {
    type: 'bar',
    maintainAspectRatio : false,

    data: {
        labels: ["Jun","Jul","Aug","Sept","Oct"],
        datasets: [{
            label: 'Number of Working Days in Semester 7',
            data: [6, 19, 22, 19, 21],
            backgroundColor: [
               '#155E63',
               '#76B39D',
               '#89BFDD',
               '#B17179',
               '#FFB37B',

            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
var ctx5 = document.getElementById("line").getContext('2d');
    ctx5.height=275;
    var speedData = {
        labels: ["1st Semester", "2nd Semester", "3rd Semester", "4th Semester", "5rd Semester", "6th Semester"],
        datasets: [{
          label: "CGPA",
          lineTension: 0,
          data: [9.00, 9.45, 6.75, 5.67, 10, 10, 8.9],
          fill: false,
    borderColor: '#374955',
    backgroundColor: 'transparent',
    borderDash: [5, 5],
    pointBorderColor: '#F62A66',
    pointBackgroundColor: '',
    pointRadius: 5,
    pointHoverRadius: 10,
    pointHitRadius: 30,
    pointBorderWidth: 2,
    pointStyle: 'rectRounded'
        }]
      };
    var lineChart = new Chart(ctx5, {
        type: 'line',
        data: speedData,
        options: {
responsive: true, 
maintainAspectRatio: false
}

        
    });
   


});
</script>


</body>
</html>
