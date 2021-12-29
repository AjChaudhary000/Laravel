<?php
include("./admin/connection.php");

if(isset($_POST['poolsubmit']))

{
    $select = $_POST['rd'];
    $ans = $_POST['answer'];
    $pid = $_POST['pool_no'];

    $qry="select max(number) as num from pool_result where selection = '$select' and pool_id = '$pid' ";
    $res = mysqli_query($con,$qry);
    $lst = mysqli_fetch_array($res);
    $row = mysqli_num_rows($res);
    $num = $lst['num'];
    if($row <= 0)
    {
        $query = "insert into pool_result(pool_id,selection,number)
        values('$pid','$select','1')";
        
 if(mysqli_query($con,$query))
        {
            header("location:index.php");
        }
        else
        {
            mysqli_error($con);
        }

    }
 else
    {
     $num++;
    $q= "insert into pool_result(pool_id,selection,number)
    values('$pid','$select','$num')";

    if(mysqli_query($con,$q))
    {
        header("location:index.php");
    }
    else
    {
        mysqli_error($con);
    }
} 

    // if($select == $ans)
    // {
    //     echo "correct";
    // }
    // else
    // {
    //     echo "false";
    // }
    // echo $ans;
    // header("location:indexx.php");
    }
?>