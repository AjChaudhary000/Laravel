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
    <title>Availiable Test</title>
    <script src="https://kit.fontawesome.com/70f8ef67b7.js" crossorigin="anonymous"></script>
</head>
<body class="container">

    <?php include("nav.php"); ?>

    <div class="row col-md-12 mt-5">
           <div class="col-md-3 border bg-dark text-light">
               <h2>Hello
                   <?php
                    echo $_SESSION['UNAME'];
                   ?>
               </h2>
       </div>
</div> 

    
    
    

     <div class ="row col-md-12 ">
      
     <?php

        $con=mysqli_connect("localhost","root",""); 
        mysqli_select_db($con,"q2");
        $qry = "select * from test_create where status = 1 ";
        $result=mysqli_query($con,$qry);
        if(mysqli_num_rows($result) == 0)
          {
            ?>
           <div class ="row col-md-12 mt-5 border pb-5 bg-light">
             <h1 class="text-center col-md-12 mt-5">No Active Test Is Availiable...</h1>
          </div> 
        <?php  
          }
          else
          {
            ?>
            <div class ="row col-md-9 mt-5 border bg-danger text-light ml-2">
             <h4 class="col-md-3 pt-2">Subject</h4>
             <h4 class="col-md-2 pt-2">Test</h4>
            <h4 class="col-md-3 pt-2">Questions</h4>
           </div>
      <?php
          }
        while($lst=mysqli_fetch_array($result))

        {
        ?>
        <div class="row col-md-9 border mt-1 ml-2">
            <h4 class="col-md-3 pt-2"><?php
                                         $sub = $lst['s_name']; 
                                         echo $sub; ?></h4>
            <h4 class="col-md-3 pt-2"><?php echo $lst['t_name']; ?></h4>
            <h4 class="col-md-3 pt-2"><?php echo $lst['no_q']; ?></h4>
            <a href="./admin/view_que.php?sname=<?php echo $sub;?>"><h4 class="col-md-3  pt-2">Start</h4></a>
        </div>
      <?php
        }
        ?>  

    </div>


       
</body>
</html>