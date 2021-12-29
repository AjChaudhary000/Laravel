
<?php 
   session_start();

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"q2");


      //  code to submit subject related data 

    if(isset($_POST['btnsubmit']))
            {
              $qry="insert into subject(s_name,s_code,exam_date,examtime,exam_endtime)
              values('".$_POST['subname']."','".$_POST['subcode']."','".$_POST['exmdate']."','".$_POST['exmtime']."'
              ,'".$_POST['exmendtime']."')";

              if(mysqli_query($con,$qry))
              {
   	              header("location:mcq.php");
               }
              else
              {
            	      echo mysqli_error($con);
               }
                     mysqli_close($con);   
              }

      //  code to submit questions for particular subjects

    elseif(isset($_POST['btnmcq']))
          {
            $qry="insert into mcq_que(q_no,question,opt_1,opt_2,opt_3,opt_4,correct_opt,sub_name)
            values('".$_POST['q_no']."','".$_POST['question']."','".$_POST['opt1']."','".$_POST['opt2']."'
           ,'".$_POST['opt3']."','".$_POST['opt4']."','".$_POST['correct_opt']."','".$_POST['sname']."')";

          if(mysqli_query($con,$qry))
          {
             	header("location:mcq.php");
           }
          else
          {
   	        echo mysqli_error($con);
           }
            mysqli_close($con);
           }
      
     //code if user press submit button      

    elseif(isset($_GET['btnsave']))
  
          {
    
             $_SESSION['incr'];
             $qnumber = $_GET['q'];
             $sb = $_GET['subject'];
             $qry="select * from mcq_que where sub_name = '$sb' and q_no = '$qnumber' "; 
             $result=mysqli_query($con,$qry);
             $lst=mysqli_fetch_array($result);

             $qoqry ="select no_q,t_marks from test_create where s_name ='$sb'";
             $res=mysqli_query($con,$qoqry);
             $lst2=mysqli_fetch_array($res);

            //  $s = $lst['sub_name'];
            $increment = $lst2['t_marks']/$lst2['no_q'];

         if($_GET['opt'] == $lst['correct_opt'])
        {
              
              $_SESSION['incr'] += $increment;

              header("location:view_que.php?qno=$qnumber&sname=$sb"); 
                if($qnumber >= $lst2['no_q'])
                {
                    // header("location:view_que.php?qno=$qnumber&sname=$sb&true=1;"); 
                    header("location:view_que.php?qno=$qnumber&sname=$sb&submit=1&true=1;");  
        // this code for showing answer is correcr 
                 }
         
       
             }
                 else
               {
                $_SESSION['incr'] += 0; 
       
              header("location:view_que.php?qno=$qnumber&sname=$sb");
        // header("location:view_que.php?qno=$qnumber&false=1;");  code if answer is wrong
               if($qnumber >= $lst2['no_q'])
                 {
          
               header("location:view_que.php?qno=$qnumber&sname=$sb&submit=1&true=1;");  
              
                  }

                }
    
    }
    // code for creating test


    elseif(isset($_POST['btncreate_test']))
    {

      $qry="insert into test_create(s_name,t_name,no_q,t_marks)
      values('".$_POST['subname']."','".$_POST['tst_name']."','".$_POST['total_q']."','".$_POST['total_mrks']."')";

      if(mysqli_query($con,$qry))
      {
           header("location:activetst.php");
       }
      else
      {
            echo mysqli_error($con);
       }
             mysqli_close($con);   
      }
    

    elseif(isset($_GET['submitans']))
    {
      // $userscore = $_SESSION['incr'];

      header("location:view_que.php?qno=$qnumber&showans"); 
      
    }
   elseif(isset($_GET['dltmcq']))
      {
        $dltid = $_GET['dltmcq'];

        $qry="delete from test_create where id = '$dltid' ";
        mysqli_query($con,$qry);

        header("location:activetst.php");
      } 

   elseif(isset($_GET['destroy']))
   {
       session_destroy();
   }
   elseif(isset($_GET['adminlogout']))
   {
    session_destroy();

    header("location:index.php");
   }
 else
 {

    $username = $_GET['name'];
    $userpass = $_GET['pwd'];

    if($username =="admin" && $userpass == "imadmin")
    {
        $_SESSION['ADMIN'] = "IMADMIN";
        header("location:home.php?success=1");
    }
    else
    {
      header("location:index.php?error=1");
    }

    }
  
    ?>