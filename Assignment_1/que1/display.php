<?php
 session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display record</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/biodata.css">
</head>
<body class="container">

    <!-- navbar included here -->
    <?php include("nav.php"); ?>
      
      <?php
        $con=mysqli_connect("localhost","root","");
        mysqli_select_db($con,"q1");

        $qry = "select * from biodata where data_id=".$_REQUEST['hdid'];
        $result=mysqli_query($con,$qry);
        $lst=mysqli_fetch_array($result)

        ?>

  
        
        <!-- upload biodata form start from here -->
        <div class="userdata border border-dark mt-5" style="background-color: grey;">
        <!-- <div class="row mt-5">
            <h2 class="col-12 text-center">Resume</h2>
        </div> -->
        <div class="row mt-5">
         <h1 class="col-8 ml-4 bg-dark text-light text-center mr-4" ><?php echo $lst['name']; ?></h1>
         <!-- <img class="ml-5" src="./image/contact.png" > -->
         
         <?php echo "<img src ='./image/".$lst['image']."' height='100px' >"; ?>
        </div>
        <div class="row">
            <button class="btn-primary col-md-3 ml-5 mt-3 form-control">User Info</button>
        </div>
        <div class="row col-md-12 mt-3 ml-3">
            
            <h5 class="col-md-2 bg-light text-center">Email </h5>
            <h5 class="col-md-3 bg-dark text-center  text-light"><?php echo $lst['email']; ?></h5>
            <div class="col-md-1"></div>
            <h5 class="col-md-2  bg-light ml-1 text-center">Phone</h5>
            <h5 class="col-md-2 bg-dark text-center text-light"><?php echo $lst['phone']; ?></h5>
            
        </div>
        <div class="row col-md-12 mt-2 ml-3">
            <h5 class="col-md-2  bg-light text-center">Gender </h5>
            
            
            <h5 class="col-md-2 bg-dark text-light text-center "><?php echo $lst['gender']; ?></h5>
            <div class="col-md-2"></div>
            <h5 class="col-md-2 text-center bg-light ml-1">Nation</h5>
            <h5 class="col-md-2 bg-dark text-light text-center"><?php echo $lst['nation']; ?></h5>
        </div>
        <div class="row col-md-12 mt-2 ml-3">
            <h5 class="col-md-2 bg-light text-center">Age</h5>
           
            <h5 class="col-md-1 bg-dark text-light text-center"><?php echo $lst['age']; ?></h5>
            <div class="col-md-3"></div>
            <h5 class="col-md-2 bg-light ml-1 text-center"> City</h5>
            
            <h5 class="col-md-2 bg-dark text-light text-center"><?php echo $lst['city']; ?></h5>
        </div>
        <div class="row col-md-12 mt-2 ml-3">
            
            <h5 class="col-md-2 bg-light text-center">DOB</h5>
            <h5 class="col-md-2 bg-dark  text-light text-center"><?php echo $lst['dob']; ?></h5>
            <div class="col-md-2"></div>
            <h5 class="col-md-2  bg-light ml-1 text-center">Father</h5>
            <h5 class="col-md-2 bg-dark text-light text-center"><?php echo $lst['f_name']; ?></h5>
            
        </div>
        <div class="row col-md-12 mt-2 ml-3">
            
            <h5 class="col-md-2 text-center bg-light">Address</h5>
            <h5 class=" bg-dark text-center  text-light"><?php echo $lst['address']; ?></h5>
            
            
        </div>
        <div class="row">
            <div class="col-5"></div>
            <button class="btn-primary col-md-3 ml-4 mt-3 form-control">Education Qualification</button>
        </div>
        <div class="row mt-3">
            <div class="col-5 ml-4"></div>
            <h5 class="bg-light">Completed BCA in 2019 from VNSGU </h5> 
            
        </div>
        <div class="row mt-3">
            
            <h2 class="bg-dark ml-4 col-md-4 text-light border border-rounded text-center">Work Experience</h2> 
            
        </div>
        <div class="row mt-3">
            <h5 class="ml-4 col-md-3 bg-light">No Work Experience</h5>
        </div>

        <div class="row">
            <div class="col-5"></div>
            <button class="btn-primary col-md-3 ml-4 mt-2 form-control">Skills</button>
        </div>
        <div class="row mt-3">
            <div class="col-5 ml-4"></div>
            <h5 class="bg-light" >Communction</h5>  
        </div>
        <div class="row ">
            <div class="col-5 ml-4"></div>
            <h5 class="bg-dark text-light" >Coding</h5>  
        </div>
        </div>


      
    
</body>
</html>