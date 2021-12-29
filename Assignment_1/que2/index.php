
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
    <link rel="stylesheet" type="text/css" href="./css/biodata.css">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/70f8ef67b7.js" crossorigin="anonymous"></script>
</head>
<body class="container">

    <!-- navbar start from here -->

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
            <option value=""><?php echo $_SESSION['UNAME'] ?></option>
            <a href="logout.php"><option value="">logout</option></a>
          </select>
        </li>
   
       </ul>
      
     </div>
   </nav> -->

      <!-- navbar ends here -->

      <div class="imgarea">
          <img src="./admin/img/bdyimg.jpg" height="500px" width="100%">
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