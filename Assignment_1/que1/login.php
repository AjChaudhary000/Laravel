
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

  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark container-fluid">
    <div class=""> 
    <img src="./image/loc.png" height="40px">
    <b class="text-light">XYZ.build</b>
 </div>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto mr-5 bg-warning">
       <li id="list" class="">
         <a class="nav-link " href="index.php">Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link " href="project.html">Upload Biodata</a>
       </li>
       <li class="nav-item">
         <a class="nav-link " href="service.html">Edit BioData</a>
       </li>
       <li class="nav-item">
         <a class="nav-link " href="aboutus.html">Display BioData</a>
       </li>
       
 
       <li class="nav-item">
         <a class="nav-link text-danger" href="login.php">Login</a>
       </li>

       <li id="user" style="display: none;">
         <select class="form-control border border-rounded bg-success " name="" id="">
           <option value="">name</option>
           <option value="">logout</option>
         </select>
       </li>
 
     </ul>

    
   </div>
 </nav> -->

      <!-- navbar ends here -->

      <div class="imgarea">
          <img src="./bdyimg.jpg" height="500px" width="100%">
      </div>

      <!-- login box -->

      <div class="loginbox ">
       
        <form action="backend.php" >
               
          <div class="col-12 justify-content-md-center login">
            
            <h3 class="text-center col-12 bg-dark text-light border border-bottom-dark" >Login Page</h3>
            <input class="form-control input1 mt-5 col-8 ml-5" type="text" name="name" placeholder="Username/No">
            <input class="form-control mt-3 input2 col-8 ml-5" type="text" name="pwd" placeholder="Password">
            <button  class="col-3 mt-4 bg-warning col-3 ml-5" type = "submit" name = "signin">Login</button>
            <div class="row mt-3">
            <div class="col-1"></div>  
            <b class=" col-6 "><kbd>Don't have Account?</kbd></b>
            <a href="signup.php"><b class="text-light col-2 bg-info">Sign Up</b></a>
          </div>
          <div class="alert alert-danger mt-5 row col-12" id="err"  role="alert" style="display: none;">
             <b>Username Or Password is wrong..</b> 
           </div>
    
    
          </div>
        </form>
                         
        </div>
        <script>
      
     
          // e.style.display = 'none';
           // e.style.visibility = 'hidden';
     
           let parameter = new URLSearchParams(window.location.search);
           let a = parameter.get("error");
           //let suc = parameter.get("success")
            if(a == 1)
           {
              
               document.getElementById('err').style.display = "block"; 
            }
           
          //  if(suc == 1)
          //  {
          //    
          //   document.getElementById('user').style.display = "block"; 
          //  }
           
       </script> 
    
</body>
</html>