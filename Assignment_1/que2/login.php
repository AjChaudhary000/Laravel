
 <?php
 session_start();

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
 
</head>
<style>
   
</style>
<body class="container">


   <?php include("nav.php"); ?>

 

      <div class="loginbox ">
       
        <form action="backend.php" >
               
          <div class="col-12 justify-content-md-center login">

          <?php
           if(isset($_GET['error']))
           {
          ?>
            <div class="alert alert-danger mt-5 row col-md-5 ml-2" id="err"  role="alert" >
             <b>Username Or Password is wrong..</b> 
           </div>
           <?php
           }
           ?>
    
            
            <!-- <h3 class="text-center col-12 bg-dark text-light border border-bottom-dark" >Login Page</h3> -->
            <input class="form-control input1 mt-5 col-4 ml-5" type="text" name="name" required placeholder="Username/No">
            <input class="form-control mt-3 input2 col-4 ml-5" type="text" name="pwd" required placeholder="Password">
            <button  class="col-2 mt-4 bg-warning  ml-5" type = "submit" name = "signin">Login</button>
            <div class="row mt-3">
            <div class="col-1"></div>  
            <p class=" col-2">Don't have Account?</p>
            <a href="signup.php"><b class="text-light col-2 bg-info">Sign Up</b></a>
          </div>
          
    
          </div>
        </form>
                         
        </div>
        <script>
      
     
          // e.style.display = 'none';
           // e.style.visibility = 'hidden';
     
          //  let parameter = new URLSearchParams(window.location.search);
          //  let a = parameter.get("error");
          //  //let suc = parameter.get("success")
          //   if(a == 1)
          //  {
              
          //      document.getElementById('err').style.display = "block"; 
          //   }
           
          // //  if(suc == 1)
          // //  {
          // //    
          // //   document.getElementById('user').style.display = "block"; 
          // //  }
           
       </script> 
    
</body>
</html>