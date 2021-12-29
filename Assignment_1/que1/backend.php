<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"q1");

if(isset($_GET['signin']))
{
   $user = $_GET['name'];
   $pass = $_GET['pwd'];
   $qry = "select * from register where Email ='$user' and password = '$pass' ";
   $res=mysqli_query($con,$qry);

   if(mysqli_num_rows($res)>0)
   {
      $row=mysqli_fetch_array($res);
      $_SESSION['UNAME']=$row[1];
      $_SESSION['ID']=$row[0];
      header("location:index.php?success=1");
   }
   else
   {
      header("location:login.php?error=1");
   }
   
}
else if (isset($_POST['reg']))
{
 $qry="insert into register(Name,Email,Last_name,Phone,Password,City,Date,Address,Gender)
   values('".$_POST['name']."','".$_POST['email']."','".$_POST['lname']."','".$_POST['txtPhone']."','".$_POST['pwd']."','".$_POST['txtcity']."','".$_POST['dob']."'
   ,'".$_POST['txtadd']."','".$_POST['gender']."')";

   if(mysqli_query($con,$qry))
   {
   	header("location:login.php");
   }
   else
   {
   	echo mysqli_error($con);
   }
   mysqli_close($con);  
}
else if(isset($_POST['upld']))
{
   $uid = $_SESSION['ID'];
   echo $uid;
   move_uploaded_file($_FILES['img']['tmp_name'],"./image/". $_FILES['img']['name']);
   //code for moving image to given folder
   $qry="insert into biodata(user_id,name,f_name,email,age,nation,phone,address,education,city,gender,dob,image)
   values('".$uid."','".$_POST['name']."','".$_POST['fname']."','".$_POST['email']."','".$_POST['age']."'
   ,'".$_POST['nation']."','".$_POST['txtPhone']."','".$_POST['add']."','".$_POST['txtedu']."','".$_POST['txtcity']."'
   ,'".$_POST['gender']."','".$_POST['dob']."','".$_FILES['img']['name']."')";
   
   if(mysqli_query($con,$qry))
   {
   	header("location:displaybio.php");
   }
   else
   {
   	echo mysqli_error($con);
   }
   mysqli_close($con); 
   
    
   
}

else if(isset($_GET['update']))
    {
      $upid = $_GET['update'];
      // header("location:index.php?id=$upid");
      // exit(); 
      $qry ="update biodata set name ='".$_POST['name']."',f_name='".$_POST['fname']."',email ='".$_POST['email']."',age='".$_POST['age']."',nation='".$_POST['nation']."',
      phone='".$_POST['txtPhone']."',address='".$_POST['add']."',education='".$_POST['txtedu']."',city='".$_POST['txtcity']."',
      gender='".$_POST['gender']."',dob='".$_POST['dob']."' where data_id ='$upid' ";
      // image='".$_FILES['img']['name']."'
      if(mysqli_query($con,$qry))
      {
         header("location:displaybio.php");
      }
      else
      {
         echo mysqli_error($con);
      }
     }

elseif(isset($_GET['dltid']))
{
   $qry="delete from biodata where data_id=".$_REQUEST['dltid'];

   if(mysqli_query($con,$qry))
   {	
      header("location:editbio.php");
   } 
   else
   {
      echo mysqli_error($con);
   }
mysqli_close($con);

}

?>