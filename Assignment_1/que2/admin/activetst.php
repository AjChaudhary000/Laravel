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
    <title>Active Test</title>
</head>
<body class="container">

    <?php include("adminnav.php"); ?>



  <!-- <div class="row col-md-12 mt-5">
    <h1>Total Number of Tests</h1>
</div> -->

      <div class="row col-md-12 mt-5">

       <div class="col-md-4"></div>
       
       <div class="row col-md-8 border bg-dark">
       <h5 class ="col-md-2 text-light">Subject</h5>
       <h5 class ="col-md-2 text-light">Test </h5>
       <h5 class ="col-md-2 text-light ">Marks</h5>
       <h5 class ="col-md-2 text-light text-center">Questions</h5>
       <!-- <div class="col-md-1"></div> -->
       <h5 class="col-md-2 text-light">Status</h5>
       <h5 class="col-md-1 text-light">Remove</h5>
      
</div> 
</div>  



    
        <?php

            $con=mysqli_connect("localhost","root",""); 
            mysqli_select_db($con,"q2");
            $qry = "select * from test_create ";
            $result=mysqli_query($con,$qry);
            while($lst=mysqli_fetch_array($result))

            {
        ?>

     <div class="row col-md-12 mt-2"> 
      
       <div class="col-md-4"></div>
      
       <div class="row col-md-8  border border-bottom-dark">
      
       <h5 class="col-md-2 pt-2"><?php $name = $lst['id'];
                                       echo $lst['s_name']; ?></h5>
       <h5 class="col-md-2 pt-2"><?php echo $lst['t_name']; ?></h5>
       <h5 class="col-md-2 pt-2"><?php echo $lst['t_marks']; ?></h5>
       <h5 class="col-md-2 pt-2"><?php echo $lst['no_q']; ?></h5>
       <!-- <div class="col-md-1"></div> -->
       
       <a href=activetst.php?active=<?php echo $name; ?>><h5 class="col-md-3  mt-2 ">
       
       <?php
            
            if($lst['status']==1)
            {
              ?>
    <a href=activetst.php?active=<?php echo $name; ?>&true=1><b class="col-md-2 bg-success text-light" >Active</b> 
          <?php
            }
            else
            {
              ?>
    <a href=activetst.php?active=<?php echo $name; ?>&false=1><b class="col-md-2 bg-danger text-light" >inactive</b> 
          <?php     
            }
           
          ?>


       <?php
        
       // if user click on inactive button status data is updated with value 1
       
       
        if(isset($_GET['active'],$_GET['false']))
        {
          $cmpr = $_GET['active'];
          $con=mysqli_connect("localhost","root",""); 
          mysqli_select_db($con,"q2");

          $qry="update test_create set status ='1' where id = '$cmpr'";
          if(mysqli_query($con,$qry))
	          	{
		      	header("location:activetst.php");
              } 
	      	else
	      	{
	          		echo mysqli_error($con);
	      	}
            mysqli_close($con);
          
        ?>
        <!-- <a href=activetst.php?active=<?php echo $name; ?>&true=1><b class="col-md-2 bg-success" >Active</b>  -->
       <?php        
        }

        // if user click on inactive button status data is updated with value 0

        if(isset($_GET['active'],$_GET['true']))

        {
         
          $cmpr = $_GET['active'];
          $con=mysqli_connect("localhost","root",""); 
          mysqli_select_db($con,"q2");

          $qry="update test_create set status ='0' where id = '$cmpr'";
          if(mysqli_query($con,$qry))
	          	{
		      	header("location:activetst.php");
              } 
	      	else
	      	{
	          		echo mysqli_error($con);
	      	}
            mysqli_close($con);
        }

        ?>
        
      
       </h5>

      </a>    
      <a href="mcqbackend.php?dltmcq=<?php echo $lst['id'];?>"><p class="bg-warning">Delete</p></a>                      
       </div>

    </div>
       <?php
         }
         ?>
    
</body>
</html>