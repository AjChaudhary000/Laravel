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
    <title>Create Test</title>
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
                      <?php

                            $con=mysqli_connect("localhost","root",""); 
                            mysqli_select_db($con,"q2");
                            $qry = "select * from subject ";
                            $result=mysqli_query($con,$qry);
                            while($lst=mysqli_fetch_array($result))

                         {
                        ?>  
                      <option value="<?php echo $lst['s_name']; ?>"><?php echo $lst['s_name'];?></option>
                      <?php
                         }
                         ?>

                    <!-- //   <option value="PHP">PHP</option>
                    //   <option value="C++">C++</option>
                    //   <option value="Java">Java</option>
                    //   <option value=".Net">.Net</option> -->
              </select>
            </div class ="col-md-4"></div>
       </div>

       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Test Name</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="text" name="tst_name"  required placeholder="Test Name">
            </div class ="col-md-4"></div>
       </div>
       
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Number Of Question</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="text" name="total_q"  required placeholder="Number of Question">
            </div class ="col-md-4"></div>
       </div>

       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Total Marks</h5></div>
                <input class ="col-md-4 form-control ml-2 border border-warning" type="text" name="total_mrks"  required placeholder="Enter Marks">
            </div class ="col-md-4"></div>
       </div>
       
       <div class="row col-md-12 mt-3">
                <div class="col-1"></div>
                <!-- <div class="col-md-3 text-center bg-light border border-rounded"> <h5>Exam Time</h5></div> -->
                <input class ="col-md-2 mt-3 form-control ml-2 btn-success border border-warning" type = "Submit" name="btncreate_test" value="Submit">
            </div class ="col-md-4"></div>
       </div>
</div >

</body>
</html>