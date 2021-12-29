<?php
 session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/biodata.css">
</head>
<body class="container">

    <!-- navbar included here -->
    <?php include("nav.php"); ?>



      <?php
        if(!isset($_SESSION['UNAME']))
     {
         ?>
           <div class="row col-md-12 mt-5" >
           <h1 class="col-md-6 bg-light text-center">Please Login First..</h1>
           <button class="form-control col-md-1 mt-2 ml-2 btn-success">Log in</button>
       </div>
       <?php
       exit;
    }
  ?>
       
  
        <!-- <div class="imgarea">
            <img src="./edit.jpg" height="600px" width="100%">
        </div> -->

        <!-- upload biodata form start from here -->

        <div class="editbox ">
       
        <table class=" table table-striped table-dark" border="1px solid black" width="100%">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Username</th>
                <th>Mobile</th>
                <th>Action</th>
            </tr>
            
            <?php
            if(!isset($_SESSION['UNAME']))
            {
                
               exit;
            }
          ?>

            <?php
            $uid = $_SESSION['ID'];
            $i =0;  
            $con=mysqli_connect("localhost","root","");
            mysqli_select_db($con,"q1");
            $qry = "select * from biodata where user_id = '$uid'";
            $result=mysqli_query($con,$qry);
            while($lst=mysqli_fetch_array($result))
            {
                $i++;
           ?>
            <tr class="mt-3">
                <td><b><?php echo $i;?></b></td>
                <td><b><?php echo $lst["name"];?></b></td>
                <td><b><?php echo $lst["email"];?></b></td>
                <td><b><?php echo $lst["phone"];?></b></td>
                <td> <a href="display.php?hdid=<?php echo $lst["data_id"];?>"><b class="bg-ingo">View</b></a></td>  
            </tr>

            <?php } ?>
            </table>  

            
                        
        </div>

      
    
</body>
</html>