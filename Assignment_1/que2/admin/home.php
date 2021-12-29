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
    <title>Home</title>
</head>
<body class="container">

<?php include("adminnav.php"); ?>

   <div class="row col-md-12">


   <img src="./img/bdyimg.jpg" height="500px" width="100%">

   <!-- <div class="imgarea">
            <img src="./man.png" height="100px" width="100px">
        </div> -->
   
</div>
</body>
</html>