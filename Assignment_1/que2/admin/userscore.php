<?php

 session_start();
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/mcq.css">
    <title>Exam Completed</title>
</head>
<body class="container">


     
<div class="row col-md-12 mt-5">
    <div class="col-md-2"></div>
    <h1 class="col-md-8 text-center mt-5 bg-light">Your Test Is Completed</h1>
    <h3 class="col-md-3 text-center"><?php
    
    if(isset($_GET['submitans']))
    {
     include("connection.php");
      
     $subname = $_GET['submitans'];   
     $obtain  = $_SESSION['incr'];
     $date = date("d/m/y");
     $sid =  $_SESSION['ID'];
     date_default_timezone_set('Asia/kolkata');
     $time = date("h:i:s");
    // echo $date; 

    $query="select t_marks from test_create where s_name = '$subname' ";
    $result=mysqli_query($con,$query);  
    $lst=mysqli_fetch_array($result);

    $mrk = $lst['t_marks'];
   
    //  $con=mysqli_connect("localhost","root","");
    //  mysqli_select_db($con,"q2");
     $qry = "insert into result(s_name,total_mrks,obtain_mrks,exam_date,exam_time,stu_id)
             values('$subname','$mrk','$obtain','$date','$time','$sid')";

     if(mysqli_query($con,$qry))
        {
            // echo "Test Done";
        }
     else
        {
             echo mysqli_error($con);
        }
           mysqli_close($con);   
        

     $_SESSION['incr'] = 0;
   
     }
      ?></h3>
      <a href="../result.php"><h3 class="btn-info mt-3 form-control">Show Result</h3></a>

</div>
</body>
</html>