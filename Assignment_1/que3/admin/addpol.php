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
    <title>Add Pool</title>
</head>
<body class="container">
  
   <?php
   include("nav.php");
      
      ?>

      <div class="col-md-12 mt-5">
          <div class="row col-md-10">
              <div class="col-md-4"></div>
              <div class="col-md-6">
                  
               <form action="backend.php" method="post">
                  <textarea class="form-control" type="text" name="question" placeholder="Enter Your Question here"></textarea> 
                  <input class="form-control col-md-8 mt-3" type="text" name ="opt1" required placeholder="Option 1">    
                  <input class="form-control col-md-8 mt-3" type="text" name ="opt2" required placeholder="Option 2"> 
                  <input class="form-control col-md-8 mt-3" type="text" name ="opt3" required placeholder="Option 3"> 
                  <input class="form-control col-md-8 mt-3" type="text" name ="opt4" required placeholder="Option 4"> 
                  <input class="form-control col-md-8 mt-3" type="text" name ="correct" required placeholder="Correct">
                  <input class="form-control col-md-3 mt-3 btn btn-success" type="submit" name="addpool" value="submit">
               </form> 
              <div>     
     </div>
</div>

      
    
</body>
</html>