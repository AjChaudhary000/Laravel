<?php

session_start();

include("connection.php");

if(isset($_POST['addpool']))
{
    $qry="insert into pool(question,opt1,opt2,opt3,opt4,correct)
              values('".$_POST['question']."','".$_POST['opt1']."','".$_POST['opt2']."','".$_POST['opt3']."'
              ,'".$_POST['opt4']."','".$_POST['correct']."')";

              if(mysqli_query($con,$qry))
              {
   	              header("location:addpol.php");
               }
              else
              {
            	      echo mysqli_error($con);
               }
                     mysqli_close($con); 

}



if(isset($_GET['active']))
{
   $pid = $_GET['active']; 
   echo $pid;
   $qry = "update pool set status = '1' where p_id ='$pid'  ";
   $res = mysqli_query($con,$qry);
   header("location:poolstatus.php");
}
if(isset($_GET['inactive']))
{
    $pid = $_GET['inactive']; 
    echo $pid;
    $qry = "update pool set status = '0' where p_id ='$pid'  ";
    $res = mysqli_query($con,$qry);
    header("location:poolstatus.php"); 
}
else if(isset($_GET['val']))
{
    header("location:index.php");
}

else if(isset($_GET['dlt']))

    {
      $id= $_GET['dlt'];   
      $qry ="delete from pool where p_id ='$id' ";
      if(mysqli_query($con,$qry))
      {
          header("location:poolstatus.php");
      }
      else
      {
          mysqli_error($con);
      }
    }

else if(isset($_GET['signin']))
{
    
    $username = $_GET['name'];
    $userpass = $_GET['pwd'];

    if($username =="admin" && $userpass == "imadmin")
    {
        $_SESSION['USER'] = "Admin";
        header("location:index.php?success=1");
    }
    else
    {
      header("location:login.php?error=1");
    }

    }

?>