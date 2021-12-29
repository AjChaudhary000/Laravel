<?php 


if(isset($_GET['qno']))
{
    $myqno = $_GET['qno'];
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"q2");
    $qry = "select * from mcq_que where sub_name = 'Rdbms' and q_no = '$myqno' ";
    $result = mysqli_query($con,$qry);
    $lst=mysqli_fetch_array($result); 

    echo $lst['question'];
}
else
{
$mydata = $_GET['val'];
// echo "no data :".$mydata." ";
include("connection.php");
$qry ="select * from register where City ='$mydata' ";
$res = mysqli_query($con,$qry);

while($lst = mysqli_fetch_array($res))
{
    echo "<option>".$lst['Email']."</option>";
}

}  
?>