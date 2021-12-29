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
    <title>Add Mcq</title>
</head>
<body class="container">

<?php include("adminnav.php"); ?>

<div class="addsub">
            <form action="mcqbackend.php" method="post">
            <div class="row col-md-12 mt-5">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Subject Name</h5></div>
                <select class="required form-control col-md-4 ml-2 " required=""  name="sname">
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
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Question Number</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="number" value="1" required name="q_no" placeholder="">
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5 class="pt-2">Question</h5></div>
                <textarea class="form-control ml-2 col-md-4" type="text"  required name="question" placeholde="">
                </textarea>
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Option 1</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="text" required name="opt1" placeholder="">
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Option 2</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="text" name="opt2" required placeholder="">
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Option 3</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="text" name="opt3" required placeholder="">
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Option 4</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="text" name="opt4" required placeholder="">
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Correct</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="text" name="correct_opt" required placeholder="">
            </div class ="col-md-4"></div>
       </div>
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <!-- <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Exam Time</h5></div> -->
                <input class ="col-md-2 mt-3 form-control ml-2 btn-success border border-warning" type = "Submit" name="btnmcq" value="Submit">
            </div class ="col-md-4"></div>
       </div>
</div >
    
</body>
</html>