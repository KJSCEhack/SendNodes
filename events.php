<?php
include('dbconnection.php');
$rollno = $_POST['studentID'];

$sql = "select * from studentsubject where studentid=$rollno";
$result = $conn->query($sql);
$events = array();
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()) 
    {
        
        
        $subid = $row['subjectid'];
        $sql2 = "select * from subject where id=$subid";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();
        $currentDate = new DateTime();        
        $currentTS = $currentDate->format('Y-m-d H:i:s');
        $subjectsql = "select * from plannedlecture where subjectid=$subid AND date>='$currentTS'";
        $subresult =  $conn->query($subjectsql);
        while($row1 = $subresult->fetch_assoc()) 
        {
            $enddate = strtotime($row1["date"]);
            $enddate = $enddate +3600;
            $subname =  $row2['name']." Lecture";
            $temp = array("title"=>$subname,"start"=>$row1['date'],"end"=>$enddate,"color"=>"skyblue");
            $events[] = $temp;
        }
        $subjectsql2 = "select * from actuallecture where subjectid=$subid AND date<='$currentTS'";
        $subresult2 =  $conn->query($subjectsql2);
        while($row3 = $subresult2->fetch_assoc()) 
        {
            $lecid = $row3['lectureid'];
            $lecsql = "select * from attendence where lectureid=$lecid AND studentid=$rollno";
            $lecresult =  $conn->query($lecsql);
            if($r = $lecresult->fetch_assoc())
            {
                $color = "lightgreen";
                $eventText="black";
            }
            else
            {
                $color = "red";
                $eventText="white";
            }
            $enddate = strtotime($row3["date"]);
            $enddate = $enddate +3600;
            $subname =  $row2['name']." Lecture";
            $temp = array("title"=>$subname,"start"=>$row3['date'],"end"=>$enddate, "color"=>$color, "textColor"=>$eventText);
            $events[] = $temp;
        }
    }
        $exam = "select * from exams";
        $examresult =  $conn->query($exam);
        while($row4 = $examresult->fetch_assoc()) 
        {
            if($row4['allday']==1)
            {
                $allday = "true";
            }
            else
            {
                $allday = "false";
            }
            
        $temp = array("title"=>$row4['testname'],"start"=>$row4['startdate'],"end"=>$row4["enddate"], "allday"=>$allday,"color"=>"yellow");
        $events[] = $temp;
        }
        $holidays = "select * from holidays";
        $holidayresult =  $conn->query($holidays);
        while($row5 = $holidayresult->fetch_assoc()) 
        {
            $temp = array("title"=>$row5['HolidayName'],"start"=>$row5['Date'], "allday"=>"true","color"=>"pink");
            $events[] = $temp;
        }
        $event = "select * from event";
        $eventresult =  $conn->query($event);
        while($row6 = $eventresult->fetch_assoc()) 
        {
            $temp = array("title"=>$row6['name'],"start"=>$row6['startdate'],"end" => $row6['enddate'] ,"allday"=>"true","color"=>"brown", "textColor"=>"white");
            $events[] = $temp;
        }
    echo json_encode($events);
}
else
{
    echo "0 results";
}
$conn->close();


