<nav class="navbar navbar-expand-lg navbar-light bg-dark container-fluid">
      <div class=""> 
      <!-- <img src="./image/loc.png" height="40px"> -->
      <b class="text-light">Question 2</b>
   </div>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto mr-5 bg-warning">
         <li id="list" class="">
           <a class="nav-link " href="index.php">Home</a>
         </li>
        
         <!-- <li class="nav-item">
           <a class="nav-link " href="activetst.php">Active Test</a>
         </li> -->
         <li class="nav-item">
           <a class="nav-link " href="mcqtest.php">Active Tests</a>
         </li>
         <li class="nav-item">
           <a class="nav-link " href="result.php">Results</a>
         </li>

         <?php
            
            if(!isset($_SESSION['UNAME']))
            {

                ?>
             <li class="nav-item">
            <a class="nav-link text-danger" href="login.php">Login</a>
           </li>

           <?php 
            }
            else
            {
                ?>
                <li id="user" >
                  <form action="logout.php" > 
               
                  <!-- <img class="border border-rounded" src="./man.png" height="30px" width="60px"> -->
          <!-- <select class="form-control border border-rounded bg-success " name="" id="">
            <option value=""></option>
             <option value=""></option> -->
          <!-- </select> -->
             <h5 class=" ml-2 pt-2 fas fa-user-tie bg-dark text-light border  mt-1 mr-1"><?php echo $_SESSION['UNAME']; ?>.. </h5> 
        </li>
        <li>
            <form>
                <input class="border border-dark btn-info ml-2 mt-2" type="submit" value="logout">
            </form>
        </li>
        <?php

            }
         ?>
         
         
   
         

       
   
       </ul>
      
     </div>
   </nav>