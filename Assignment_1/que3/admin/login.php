
 <?php
  //  session_start();
  //  if(!isset($_SESSION['UNAME']))
  //  {
  //    header("location:login.php");
  //  }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/biodata.css">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/70f8ef67b7.js" crossorigin="anonymous"></script>
</head>
<body class="container">

    <!-- navbar start from here -->

    <?php include("nav.php"); ?>
    
  

    <div class="loginbox " >
       
       <form action="backend.php" >
              
         <div class="col-6 justify-content-md-center bg-secondary border border-rounded login mt-5">
           
         <?php
          
          if(isset($_GET['error']))
          {

          ?>

          <div class="alert alert-danger ml-2 row col-12" id="err"  role="alert" >
             <b>Username Or Password is wrong..</b> 
           </div>
          <?php
          }
          ?>
           
           <h3 class="text-center col-12 bg-dark text-light border border-bottom-dark" >Login Page</h3>
           <input class="form-control input1 mt-5 col-8 ml-5" type="text" name="name" placeholder="Username/No">
           <input class="form-control mt-3 input2 col-8 ml-5" type="text" name="pwd" placeholder="Password">
           <button  class="col-3 mt-4 bg-warning col-3 ml-5" type = "submit" name = "signin">Login</button>
           <div class="row mt-3">
           <div class="col-1"></div>  
           <!-- <p class="text-light col-6">Don't have Account?</p>
           <a href="signup.php"><b class="text-light col-2 bg-info">Sign Up</b></a> -->
         </div>
      
         </div>
       </form>
                        
       </div>


      
      

      <script>

            let parameter = new URLSearchParams(window.location.search);
            let b = parameter.get("success");
           //let suc = parameter.get("success")
            if(b == 1) 
           {
              
               document.getElementById('user').style.display = "block"; 
            }
            

        </script>
   
</body>
</html>