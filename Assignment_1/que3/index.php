<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <title>Index</title>
</head>
<body class="container">
       <div class="row col-md-12 mt-5">
          
           <div class="col-md-2"></div>
          <div class="col-md-9">
            <form action="backend.php" method="post">
           <?php
             include("./admin/connection.php");
             $qry="select * from pool where status = '1' ";
             $result=mysqli_query($con,$qry);
             $row = mysqli_num_rows($result);
             if($row <= 0)
             {
                 ?>
                 <h1 class="col-md-8 text-center mt-5">No Active Pool is  There</h1>
           <?php
                 exit;      
             }
             ?>
           <?php  
             $lst=mysqli_fetch_array($result);
           ?>
          <h3 class="col-md-12 " id="que"><?php echo $lst['question'];?></h3>
          <div class="row col-md-10 mt-4">
              <b class="">(a) .</b>
              <p class="col-md-2"><?php echo $lst['opt1'] ?></p>
              <input class="col-md-1 mt-2" type="radio" id="1" value="<?php $opt =$lst['opt1'];  echo $opt;  ?>" name="rd">   
              <input class="col-md-1 mt-2" type="hidden"  value="<?php $pid =$lst['p_id'];  echo $pid;  ?>" name="pool_no">   
              <input class="col-md-1 mt-2" type="hidden"  value="<?php echo $lst['correct'] ?>" name="answer"> 
              <?php if(isset($_GET['res'])){
                 include("./admin/connection.php");
                 $p=$_GET['res'];
                 $qry="select max(number) as num from pool_result where selection = '$opt' and pool_id = '$p' ";  
                 $q = "select number from pool_result where pool_id = '$p'"; 
                 $res = mysqli_query($con,$qry);
                 $r1 = mysqli_query($con,$q);
                 $list1 = mysqli_fetch_array($res);
                 $row = mysqli_num_rows($r1);

                 $num = $list1['num'];
                 $per = $num*100/$row;
                 ?>
                 
                 <?php
                  for($k=0 ;$k<$per ; $k++)
                  {
                    ?>
                    <p class="bg-dark">_</p>
                 <?php   
                  }
                 ?>
                   <p class="mr-3 col-md-1"><?php echo round($per); ?>%</p>

                 <?php
                 }
              ?>
         
          </div>
          <div class="row col-md-10 que">
            <b class="">(b) .</b>
            <p class="col-md-2"><?php echo $lst['opt2'] ?></p>
            <input class="col-md-1 mt-2" type="radio" id="2"  value="<?php $opt=$lst['opt2']; echo $opt;  ?>" name="rd"> 
            <?php if(isset($_GET['res'])){
                 include("./admin/connection.php");
                 $p=$_GET['res'];
                 $qry="select max(number) as num from pool_result where selection = '$opt' and pool_id = '$p' ";  
                 $q = "select number from pool_result where pool_id = '$p'"; 
                 $res = mysqli_query($con,$qry);
                 $r2 = mysqli_query($con,$q);
                 $list2 = mysqli_fetch_array($res);
                 $row = mysqli_num_rows($r2);

                 $num = $list2['num'];
                 $per = $num*100/$row;
                 ?>
                 
                 <?php
                  for($k=0 ;$k<$per ; $k++)
                  {
                    ?>
                    <p class="bg-danger">_</p>
                 <?php   
                  }
                 ?>
                 <p class="mr-3 col-md-1"><?php echo round($per); ?>%</p>
                 <?php
                 }
              ?>  
        </div>
        <div class="row col-md-10 que">
            <b class="">(c) .</b>
            <p class="col-md-2"><?php echo $lst['opt3'] ?></p>
            <input class="col-md-1 mt-2" type="radio" id="3"  value="<?php $opt=$lst['opt3']; echo $opt;  ?>" name="rd">  
            <?php if(isset($_GET['res'])){
                 include("./admin/connection.php");
                 $p=$_GET['res'];
                 $qry="select max(number) as num from pool_result where selection = '$opt' and pool_id = '$p' ";  
                 $q = "select number from pool_result where pool_id = '$p'"; 
                 $res = mysqli_query($con,$qry);
                 $r3 = mysqli_query($con,$q);
                 $list3 = mysqli_fetch_array($res);
                 $row = mysqli_num_rows($r3);

                 $num = $list3['num'];
                 $per = $num*100/$row;
                 ?>
                 
                 
                 <?php
                  for($k=0 ;$k<$per ; $k++)
                  {
                    ?>
                    <p class="bg-warning">_</p>
                 <?php   
                  }
                 ?>
                 <p class="mr-3 col-md-1"><?php echo round($per);  ?>%</p>
                 <?php
                 }
              ?>  
        </div>
        <div class="row col-md-10 que">
            <b class="">(d) .</b>
            <p class="col-md-2"><?php echo $lst['opt4'] ?></p>
            <input class="col-md-1 mt-2" type="radio" id="4" value="<?php $opt=$lst['opt4']; echo $opt;  ?>" name="rd"> 
            <?php if(isset($_GET['res'])){
                 include("./admin/connection.php");
                 $p=$_GET['res'];
                 $qry="select max(number) as num from pool_result where selection = '$opt' and pool_id = '$p' ";  
                 $q = "select number from pool_result where pool_id = '$p'"; 
                 $res = mysqli_query($con,$qry);
                 $r4 = mysqli_query($con,$q);
                 $list4 = mysqli_fetch_array($res);
                 $row = mysqli_num_rows($r4);

                 $num = $list4['num'];
                 $per = $num*100/$row;
                 ?>
                 
                 <?php
                  for($k=0 ;$k<$per ; $k++)
                  {
                    ?>
                    <p class="bg-success">_</p>
                 <?php   
                  }
                 ?>
                 <p class="mr-3 col-md-1"><?php echo round($per); ?>%</p>
                 <?php
                 }
              ?> 
        </div>
        <div class="row col-md-10 que">
            <input class="form-control bg-dark text-light col-md-2"  id="btn_submit" name=poolsubmit type="submit" value="submit">
            <div class="col-md-1"></div>
            <a href="index.php"><p style="display: none;" id="backbtn" class="btn btn-dark" >Back</p></a>
            <a href="index.php?res=<?php echo $lst['p_id'];?>"><p  class="btn btn-dark" id="viewbtn" >View</p></a>
           
        </div>
     
</form>

</div>

     <script>

          //  function activebtn()
          //  {
          //    document.getElementById('viewbtn').style.display = "block";
          //  }
     
            let parameter = new URLSearchParams(window.location.search);
            let b = parameter.get("res");

            if(b!=null)
            {
              for(var i=1; i<5;i++)
              {
                document.getElementById(i).style.display = "none";

              }

             document.getElementById('btn_submit').style.display = "none";
             document.getElementById('viewbtn').style.display = "none";
             document.getElementById('backbtn').style.display = "block";
             
            }
  
      </script>



</body>
</html>