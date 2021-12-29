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
    <link rel="stylesheet" type="text/css" href="./css/mcq.css">
    <title>Document</title>

   
 


</head>
<body class="container">

       
      

      

      <div class="data mt-5">
       <?php

            if(isset($_GET['qno']))
            {
                
                $con=mysqli_connect("localhost","root","");
                mysqli_select_db($con,"q2");
                $qry = "select * from mcq_que where sub_name ='Rdbms' and q_no =".$_REQUEST['qno'];
                $result=mysqli_query($con,$qry);
                $lst=mysqli_fetch_array($result);
                $no = $lst['q_no'];
               
                $no++;
               
            }
            else
            {

                $con=mysqli_connect("localhost","root","");
                mysqli_select_db($con,"q2");
                $qry = "select * from mcq_que where sub_name ='Rdbms'";
                $result=mysqli_query($con,$qry);
                $lst=mysqli_fetch_array($result);

                $no = $lst['q_no'];
                $no++;
            }
       ?>
       <form action=./admin/mcqbackend.php>
       <div class="row col-md-10">
           <p class="col-md-1 text-center" ><?php echo $lst['q_no']; ?></p>
           <p class="col-md-11"><?php echo $lst['question']; ?></p>
           <div class="col-md-1"><input type="hidden" name=q value="<?php echo $lst['q_no']; ?>" ></div>
           <p class="col-md-5 "><b class="mr-2"> a.</b><?php echo $lst['opt_1']; ?> <input class="ml-3" type="radio" name="opt" id="1"  value="<?php echo $lst['opt_1']; ?>"> </p>
           <p class="col-md-6 "><b class="mr-2">b.</b><?php echo $lst['opt_2']; ?><input class="ml-3" type="radio" name="opt" id="2"  value="<?php echo $lst['opt_2']; ?>"> </p>
           <div class="col-md-1"></div>
           <p class="col-md-5 "><b class="mr-2">c.</b><?php echo $lst['opt_3']; ?><input class="ml-3" type="radio" name="opt" id="3"  value="<?php echo $lst['opt_3']; ?>"> </p>
           <p class="col-md-6 "><b class="mr-2">d.</b><?php echo $lst['opt_4']; ?><input class="ml-3" type="radio" name="opt" id="4"  value="<?php echo $lst['opt_4']; ?>"> </p>
           <div class="col-md-8"></div>
          <div class="col-md-2 mt-5"  ><input class="btn-success form-control"  type=submit  id="myid" name=btnsave value="save"></div>
        </form>
           <div class="col-md-2 mt-5">
               
               <a href="view_que.php?qno=<?php echo $no; ?>&next=1"><p class="btn-info form-control" onclick="savebtn()" id="nt" style="display: none;"  >Next Que</p></a>
     </div>
     <div class="row col-md-12 mt-3">

  <!-- code to display answer is wrong or write -->

    <!-- <div class="col-md-4">
        <p>
            <?php

         //     if(isset($_GET['true']))
         //     {
                ?>
               <h5 class="bg-success text-center text-light col-md-8">Correct Answer</h5>
             <?php
           //   }
              ?>
              <?php

          //    if(isset($_GET['false']))   
            //  {
                ?>
               <h5 class="bg-danger text-center text-light col-md-8">Wrong Answer</h5>
             <?php
            //  }
              ?>
              
        </p>
    </div> -->

     <div class = col-md-4></div>


    <div class="col-md-5"></div>
      <?php
      if(isset($_GET['submit']))
      {
          ?>  
         
         <a href="./admin/mcqbackend.php?submitans"><h5 class="btn btn-success form-control col-md-3">Submit</h5></a>
     
      <?php
      }
      ?>
    </div>
    <div class="row col-md-12 mt-5">
        <div class="col-md-6"></div>
     <?php 
     
        if(isset($_GET['showans']))
        {
            ?>
        <h5 class ="col-md-2 bg-info">Score :
        <?php  
            echo $_SESSION['incr'];

            $_SESSION['incr'] = 0;
            
        }
         ?><h5>
     <!-- <a href="mcqbackend.php?destroy"><h5 class=" text-center col-md-2 ml-3">reset</h5></a> -->
     <!-- reset button to destroy session value -->
    </div>
</div>        
</div>


   
<script type="text/javascript">
   
     
   //    alert("clicked");
    //   function savebtn()
    //   {
    //     document.getElementById('nt').style.display= "block";  
    //   }
       

       let parameter = new URLSearchParams(window.location.search);
       let b = parameter.get("qno");
       // pass question number 
       let a = parameter.get("next");
      // pass question number and next variable to display next question

      // let answer = parameter.get("true");


       if ((b != null) && (a != null)) 
       {
        document.getElementById('myid').style.display= "block";
        document.getElementById('nt').style.display= "none"; 
          
       }
       if ((b != null) && (a == null))
       {
        document.getElementById('myid').style.display= "none";  
        document.getElementById('nt').style.display= "block"; 
        
         for(var cn=1;cn<5;cn++)
         {
         document.getElementById(cn).disabled = true;
        //  once user select answer radio buttons automatically disabled           } 
       }
       }
       if(b==5)
       {
        document.getElementById('nt').style.display= "none";  
        // disappear next button when last question reached
        
       }

</script>

   
</body>


</html>