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
    <title>Poolstatus</title>
</head>
<body class="container">
     
   <?php
    include("nav.php");
   ?>

   <div class="col-md-12 mt-5">
   
       <?php
       include("connection.php");
       $qry="select * from pool";
       $result=mysqli_query($con,$qry);
       while($lst=mysqli_fetch_array($result))
       {
       ?>
       <!-- <form action="backend.php?" method="post"> -->
       <div class="row col-md-10 border mt-2">
       <!-- <input type="hidden" value="" name="pool_id">    -->
       <p class="col-md-7"><?php echo $lst['question']; ?></p>
       <?php  if($lst['status'] == 0) {?>
          <a href="backend.php?active=<?php echo $lst['p_id']; ?>"><p class="col-md-1">Inactive</p></a>
         <a href="backend.php?dlt=<?php echo $lst['p_id']; ?>"><p class="col-md-1">Delete</p></a>
        <!-- <input type="submit" class="col-md-2 ml-1" name="inactive" value="Inactive"></p> -->
      <?php } 
        else { ?>
        <!-- <a href="#"><p class=" col-md-1 ml-1">Active</p></a> -->
        <!-- <input type="submit" class="col-md-2 ml-1" name="active" value="Active"></p> -->
        <a href="backend.php?inactive=<?php echo $lst['p_id']; ?>"><p class="col-md-1">Active</p></a>
        <a href="backend.php?dlt=<?php echo $lst['p_id']; ?>"><p  class="col-md-1">Delete</p></a>
        <?php } ?>

       </div>
       <?php
       }
       ?>
       <!-- </form> -->
  
    </div> 
       
</body>
</html>