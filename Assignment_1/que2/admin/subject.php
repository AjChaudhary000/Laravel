<?php

 session_start();
  
    if(!isset($_SESSION['ADMIN']))
    {
     header("location:index.php");
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/mcq.css">
    <title>Subjects</title>
</head>
<body class="container">
    
        <?php include("adminnav.php"); ?>

        <div class="addsub">
            <form action="mcqbackend.php" method="post">
            <div class="row col-md-12 mt-5">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Subject Name</h5></div>
                <select class="form-control col-md-4 ml-2"  name="subname">
                      <option class="hidden"  selected disabled>Select Subject Name</option>
                      <option value="Rdbms">Rdbms</option>
                      <option value="PHP">PHP</option>
                      <option value="C++">C++</option>
                      <option value="Java">Java</option>
                      <option value=".Net">.Net</option>
              </select>
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Subject Code</h5></div>
                <select class="form-control col-md-4 ml-2"  name="subcode">
                      <option class="hidden"  selected disabled>Select Subject Code</option>
                      <option value="Rdbms-101">Rdbms-101</option>
                      <option value="PHP-102">PHP-102</option>
                      <option value="C++-103">C++-103</option>
                      <option value="Java-104">Java-104</option>
                      <option value=".Net-105">.Net-105</option>
              </select>
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Exam Date</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="date" name="exmdate" required placeholder="">
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Exam Start Time</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="time" name="exmtime" required placeholder="">
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Exam End Time</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="time" name="exmendtime" required placeholder="">
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <!-- <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Exam Time</h5></div> -->
                <input class ="col-md-2 mt-3 form-control ml-2 btn-success border border-warning" type = "Submit"  name="btnsubmit" value="Submit">
            </div class ="col-md-4"></div>
       </div>
</div >

</body>
</html>