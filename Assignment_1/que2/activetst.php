<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    <link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/biodata.css">    
    <title>Document</title>
</head>
<body class="container">

    <?php include("nav.php"); ?>

<!-- 
    <div class="row col-md mt-3">

     <h5 class="text-center bg-light col-md-6 mt-3">Sorry there is no active test right now</h5>

   </div>

   
   <div class="row col-md mt-3">

    <h5 class="text-center bg-light col-md-6 mt-3">Upcoming Test</h5>

  </div> -->
    
        <?php

            $con=mysqli_connect("localhost","root",""); 
            mysqli_select_db($con,"q2");
            $qry = "select * from subject ";
            $result=mysqli_query($con,$qry);
            while($lst=mysqli_fetch_array($result))

            {
        ?>

     <div class="row col-md-12 mt-5"> 
      
       <div class="col-md-3"></div>
      
       <div class="row col-md-9  border border-dark">
      
       <h5 class="col-md-2 pt-3"><?php echo $lst['s_name']; ?></h5>
       <h5 class="col-md-2 pt-3"><?php echo $lst['s_code']; ?></h5>
       <h5 class="col-md-3 pt-3"><?php echo $lst['exam_date']; ?></h5>
       <!-- <h5 class="col-md-2 pt-3"><?php
                                  date_default_timezone_set('Asia/Kolkata');
                                //   echo date("h:i:s");
                                 $t = $lst['examtime'];
                                 echo substr($t,0,5);
                                 echo date('H:i');  ?></h5>  -->

       <h5 class="col-md-5 pt-3 ">
           <?php
          
          $t = $lst['examtime'];
          $end = $lst['exam_endtime'];
          $realt = date('H:i');

          if(($t<= $realt) && ($realt<$end))
          {
            ?>
            <b class="btn btn-success">Active</b>
            <b class="btn btn-info ml-4">Start Test</b>
           <?php 
           }

           else
           {
             ?>
             <b class="btn btn-danger">Not Active</b>
         <?php    
           }

           ?>

       </h5>                          
       </div>

    </div>
       <?php
         }
         ?>
    
</body>
</html>