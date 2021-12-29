<nav class="navbar navbar-expand-lg navbar-light bg-dark container-fluid">
      <div class=""> 
      <!-- <img src="./image/loc.png" height="40px"> -->
      <b class="text-light">Question 1</b>
   </div>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto mr-5 bg-warning">
         <li id="list" class="">
           <a class="nav-link " href="index.php">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link " href="upldbiodata.php">Upload Biodata</a>
         </li>
         <li class="nav-item">
           <a class="nav-link " href="editbio.php">Edit BioData</a>
         </li>
         <li class="nav-item">
           <a class="nav-link " href="displaybio.php">Display BioData</a>
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
          <select class="form-control border border-rounded bg-success " name="" id="">
            <option value=""><?php echo $_SESSION['UNAME'] ?></option>
            <!-- <option value="">Bio Data</option> -->
          </select>
        </li>
        <li>
            <form>
                <input class="form-control  border border-dark btn-info" type="submit" value="logout">
            </form>
        </li>
        <?php

            }
         ?>
         
         
   
         

       
   
       </ul>
      
     </div>
   </nav>