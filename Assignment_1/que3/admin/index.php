<?php
    session_start();
  
    if(!isset($_SESSION['USER']))
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
    <title>Home</title>
</head>
<body class="container">
  
   <?php
   include("nav.php");
      
      ?>

      
    
</body>
</html>