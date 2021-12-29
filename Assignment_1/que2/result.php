<?php
   session_start();
   if(!isset($_SESSION['UNAME']))
   {
       header("location:login.php");
   }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/biodata.css">
    <title>Result</title>
    <script src="https://kit.fontawesome.com/70f8ef67b7.js" crossorigin="anonymous"></script>
</head>
<body class="container">


       
       <?php include("nav.php"); ?>

       <div class="row col-md-12 mt-5">
           <div class="col-md-3 border bg-dark text-light">
               <h2>hello
                   <?php
                    echo $_SESSION['UNAME'];
                   ?>
               </h2>
       </div>
</div> 

       <!-- <div class="row col-md-12 mt-5">
           <div class="col-md-2"></div> -->
     
<!-- </div>  --> 


       <!-- <div class="row col-md-12 mt-2 ml-2"> -->
           
               <?php
                 $sid = $_SESSION['ID'];
                $con=mysqli_connect("localhost","root","");
                mysqli_select_db($con,"q2");
                $qry="select * from result where stu_id ='$sid' ";
                $result=mysqli_query($con,$qry);
                if(mysqli_num_rows($result) == 0)
               {
                  ?>
                   <div class ="row col-md-12 mt-5 border pb-5 bg-light">
                 <h1 class="text-center col-md-12 mt-5">Not Found Any Previous Result...</h1>
                </div> 
                     
              <?php    
                }
                else
                {
                    ?>
                    <div class="row col-md-8 border bg-dark text-light ml-2 mt-5 ">
                     <p class="col-md-2">Subject</p>
                     <p class="col-md-2">Obtain</p>
                     <p class="col-md-2">Total</p>
                     <p class="col-md-3 ">Exam Date</p>
                     <p class="col-md-3 ">Exam Time</p>
               </div>  
           <?php
                }
          
                while($lst=mysqli_fetch_array($result))
                {

                ?>
               <!-- <div class="col-md-2"></div> -->
               <div class="row col-md-8 border ml-2">
                   <p class="col-md-2 pt-2"><?php echo $lst['s_name'];?></p>
                   <p class="col-md-2 pt-2"><?php echo $lst['obtain_mrks'];?></p>
                   <p class="col-md-2 pt-2"><?php echo $lst['total_mrks'];?></p>
                   <p class="col-md-3 pt-2"><?php echo $lst['exam_date'];?></p>
                   <p class="col-md-3 pt-2"><?php echo $lst['exam_time'];?></p>
                </div>  
            <?php
                }
                ?> 
             </div>  
             
      

    
</body>
</html>