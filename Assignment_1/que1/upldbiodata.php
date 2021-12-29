<?php
 session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Biodata</title>
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
            <img src="./bdyimg.jpg" height="600px" width="100%">
        </div> -->

        <!-- upload biodata form start from here -->

        <div class="container register">
          <div class="row">
          <h3 class="col-md-12 register-heading bg-dark text-light text-center">Welcome Upload Your BioData</h3> 
              <div class="col-md-4 register-left mt-3">

                 <?php
                   
                   if(isset($_GET['edid']))
                   
                {
                    $id = $_GET['edid'];
                   include("connection.php");
                  
                   $qry ="select * from biodata where data_id = '$id'";
                   $res=mysqli_query($con,$qry);
                   $lst =mysqli_fetch_array($res);
                }
                 ?>
                 
                  <!-- <h3>Welcome</h3>
                  <p>You are 30 seconds away from earning your own money!</p>
                  <b>hello</b>
                  <h6 class="mt-4 ml-5">Date Of Birth</h6> -->
                  <div class="row register-form mt-2">
                  <form <?php if(isset($_GET['edid'])){ ?> action="backend.php?update=<?php echo $id ?>"<?php } else { ?> action="backend.php" <?php } ?>  method="post" enctype="multipart/form-data">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="name" placeholder="Full Name " required value="<?php if(isset($_GET['edid'])) {echo $lst['name']; }?>" />
                                                                                                                                     
                                  </div>
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="age" placeholder="Age" required  value="<?php if(isset($_GET['edid'])) {  echo $lst['age']; }?>" />                                                                                                                    
                                  </div>
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="add" placeholder="Address" required  value="<?php if(isset($_GET['edid'])) { echo $lst['address']; } ?>" />                                                                                                                                 
                                  </div>
                                 
                                  <div class="form-group">
                                      <b class="text-center ml-2">Gender</b>
                                  </div>
                                  <div class="form-group">
                                      <div class="maxl">
                                          <label class="radio inline col-md-5"> 
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
                       </div>  
              </div>
              <div class="col-md-8 register-right">
               
                  
                  <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <!-- <h3 class="register-heading bg-dark text-light text-center">Sign Up</h3> -->
                          <div class="row register-form mt-4">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="fname" placeholder="Father Name *" required  value="<?php if(isset($_GET['edid'])) { echo $lst['f_name']; }?>" />                                                                                                                                   
                                  </div>
                                  <div class="form-group">
                                      <input type="text" class="form-control" name="nation" placeholder="Nationality" required  value="<?php if(isset($_GET['edid'])) { echo $lst['nation'];}  ?>" />                                                                                                                                  
                                  </div>
                                  <div class="form-group">

                                      <select class="form-control" name="txtedu" required >
                                          
                                         <?php
                                           
                                           $edu = array("10th/12th pass","Graduate","Above 8th class","illetrate","Education_Qualification");
                                            
                                           foreach($edu as $val)
                                           {
       
                                               if($lst['education'] == $val)
                                               {
                                                   echo "<option value=".$val." selected >".$val."</option>";      
                                               }
                                               else
                                               {
                                                   if((!isset($_GET['edid'])) && ($val=="Education_Qualification"))
                                                   {
                                                       
                                                     echo "<option value=".$val." selected disabled>".$val."</option>"; 
                                                   }                                                    
                                                   else
                                                   {
                                                       if($val=="Education_Qualification")
                                                       {
                                                        echo "<option value=".$val." disabled>".$val."</option>";
                                                       }
                                                       else
                                                       {
                                                        echo "<option value=".$val." >".$val."</option>";
                                                       }
                                                   }
                                                 
                                               }
                                            }

                                           
                                         ?>
                                          <!-- <option class="hidden"  selected disabled>Education Qualification</option>
                                          <option>10th/12th pass</option>
                                          <option>Graduate</option>
                                          <option>Above 8th class</option>
                                          <option>illetrate</option> -->
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <b class="text-center ml-2">Date of Birth</b>
                                  </div>
                                  <div class="form-group">
                                      <input type="date" class="form-control" name="dob"  placeholder="Date of Birth " required  value="<?php if(isset($_GET['edid'])) { echo $lst['dob']; }?>" />                                                                                                      
                                  </div>

                                  
                                
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="email" class="form-control" name="email" placeholder="Your Email *" required  value="<?php if(isset($_GET['edid'])) { echo $lst['email']; } ?>" />
                                                                                                                                    
                                  </div>
                                  <div class="form-group">
                                      <input type="text" minlength="10" maxlength="10" name="txtPhone" class="form-control" required  placeholder="Your Phone *" value="<?php if(isset($_GET['edid'])) { echo $lst['phone']; } ?>" />                                                                                                 
                                  </div>

                        <div class="form-group">
                                  
                               
                                 <select  class="form-control" name="txtcity" required >
                              <?php 
                                    $arr = array("Surat","Ahemdabad","Mumbai","Kanpur","Select_City"); 

                                    foreach($arr as $val)
                                    {

                                        if($lst['city'] == $val)
                                        {
                                            echo "<option value=".$val." selected >".$val."</option>";      
                                        }
                                        else
                                        {
                                            if((!isset($_GET['edid'])) && ($val=="Select_City"))
                                            {
                                             echo "<option value=".$val." selected disabled>".$val."</option>";    
                                            }
                                            else
                                            {
                                                if($val=="Select_City")
                                                {
                                                echo "<option value=".$val." disabled>".$val."</option>";  
                                                }
                                                else
                                                {
                                                 echo "<option value=".$val." >".$val."</option>"; 
                                                }
                                            }
                                        }
                                     }
                                
                                // } 
                                ?> 
                                </select>

                                  </div>
                                 
                                  <div class="form-group">
                                      <b class="text-center ml-2">Passport size img</b>
                                  </div>
                                  <div class="form-group">
                                      <input type="file" class="form-control" name="img" required    value="<?php echo $lst['image']; ?>" />
                                  </div>
                                  <input type="submit" class="btnRegister btn-warning mt-2 col-6 " <?php if(isset($_GET['edid'])) { ?>  name="edit_data" value="Update"<?php } 
                                                                                                                                    else { ?>  name="upld" value="Register" <?php } ?> />
                                  
                                 
                              </div>
                          </div>
                      </div>
                     
                  </div>
                  </form>
              </div>
    
</body>
</html>