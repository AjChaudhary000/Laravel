<?php
 session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/biodata.css">
</head>
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
             <a class="nav-link " href="index.html">Home</a>
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
             <a class="nav-link text-danger" href="login.html">Login</a>
           </li>
     
         </ul>
        
       </div>
     </nav> -->
  
        <!-- navbar ends here -->
  
        <div class="imgarea">
            <img src="./bdyimg.jpg" height="500px" width="100%">
        </div>

        <div class="container register">
          <div class="row">
              <div class="col-md-3 register-left mt-5">
                 
                  <h3>Welcome</h3>
                  <p>Register Your Detail Here to use our services!</p>
                  <b>Xyz.Website</b>
                  <h6 class="mt-4 pt-2 ml-5">Date Of Birth -></h6>
               
              </div>
              <div class="col-md-9 register-right">
                <form action="backend.php" method="post">
                  
                  <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <h3 class="register-heading bg-dark text-light text-center">Sign Up</h3>
                          <div class="row register-form mt-4">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="name" required placeholder="First Name *" value="" />
                                  </div>
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="lname" required placeholder="Last Name *" value="" />
                                  </div>
                                  <div class="form-group">
                                      <input type="password" class="form-control" name="pwd" required placeholder="Password *" value="" />
                                  </div>
                                  <div class="form-group">
                                      <input type="date" class="form-control" name="dob" required  placeholder="Date of Birth *" value="" />
                                  </div>
                                  <div class="form-group">
                                      <div class="maxl">
                                          <label class="radio inline"> 
                                              <input type="radio" name="gender" value="male" checked>
                                              <span> Male </span> 
                                          </label>
                                          <label class="radio inline"> 
                                              <input type="radio" name="gender" value="female">
                                              <span>Female </span> 
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="email" class="form-control" name="email" required placeholder="Your Email *" value="" />
                                  </div>
                                  <div class="form-group">
                                      <input type="text" minlength="10" maxlength="10" name="txtPhone" required class="form-control" placeholder="Your Phone *" value="" />
                                  </div>
                                  <div class="form-group">
                                      <select class="form-control" name="txtcity" required>
                                          <option class="hidden"  selected disabled>Selct your City</option>
                                          <option>Surat</option>
                                          <option>Ahemdabad</option>
                                          <option>Mumbai</option>
                                          <option>Valsad</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="txtadd" required placeholder="Enter Your Address " value="" />
                                  </div>
                                  <input type="submit" class="btnRegister btn-warning" name="reg"  value="Register"/>
                              </div>
                          </div>
                      </div>
                      <!-- <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <h3  class="register-heading">Apply as a Hirer</h3>
                          <div class="row register-form">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="First Name *" value="" />
                                  </div>
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                  </div>
                                  <div class="form-group">
                                      <input type="email" class="form-control" placeholder="Email *" value="" />
                                  </div>
                                  <div class="form-group">
                                      <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                  </div>


                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="password" class="form-control" placeholder="Password *" value="" />
                                  </div>
                                  <div class="form-group">
                                      <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                  </div>
                                  <div class="form-group">
                                      <select class="form-control">
                                          <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                          <option>What is your Birthdate?</option>
                                          <option>What is Your old Phone Number</option>
                                          <option>What is your Pet Name?</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                  </div>
                                  <input type="submit" class="btnRegister"  value="Register"/>
                              </div>
                          </div>
                      </div> -->
                  </div>
                  </form>
              </div>
    
</body>
</html>