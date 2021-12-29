<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <title>Document</title>
    
</head>
<body class="container">

     <div class="row col-md-6 mt-5">
         <h1>welcome to ajax demo</h1>
         <input class="form-control col-md-3" type="text" name="name" id="demo" placeholder="enter name">
         <!-- <input type="submit" name="btn" id="mybtn" onclick="" -->
         <!-- <p id="change">abc</p> -->
         <select class="form-control mt-5" name ="frm" onmouseleave="fun(this.value)">
             <option value="one">one</option>
             <option value="Mumbai">Mumbai</option>
             <option value="Ahemdabad">Ahemdabad</option>
             <option value="three">three</option>
         </select>
         <select class="form-control mt-4" name ="frm" id="change">
            <option selected disable>Select City</option>
        </select>
     </div>  

     <div class="row col-md-12 mt-5">
         <?php
         $con=mysqli_connect("localhost","root","");
         mysqli_select_db($con,"q2");
         $qry = "select * from mcq_que where sub_name = 'Rdbms' and q_no = '1' ";
         $result = mysqli_query($con,$qry);
         $lst=mysqli_fetch_array($result);
         ?>
         <p id=no>1</p>
         <h1 id="myque"><?php echo $lst['question'];?></h1>
         <input class="form-control col-md-1 btn-success ml-2" type="submit" onclick="nxtbtn()" name="nxt" value="next">
     </div>
     
   <script>

       function fun(str)
       {
        //    document.getElementById('change').innerHTML = str;
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function()
          {
              if(this.readyState == 4 && this.status ==200)
              {
                document.getElementById('change').innerHTML = this.responseText; 
                
              }
          };
          xhttp.open("GET","mydemo.php?val="+str,true);
          xhttp.send();  
        //   alert("hello i m demo");   
       }

       function nxtbtn()
       {
         
         var b = document.getElementById('no').innerHTML;
        
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function()
          {
              if(this.readyState == 4 && this.status ==200)
              {
                document.getElementById('myque').innerHTML = this.responseText;  
                document.getElementById('no').innerHTML = parseInt(b) + 1; 
              }
          };
          xhttp.open("GET","mydemo.php?qno="+b,true);
          xhttp.send();  
       }
      
    //   alert("hello i m demo");
    </script>
</body>
</html>