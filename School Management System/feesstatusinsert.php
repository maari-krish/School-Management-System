<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed:".mysqli_connect_errno();
}
$nm=$_POST['studentname'];
$no=$_POST['studentno'];
$ta=$_POST['totalamount'];
$pa=$_POST['paid'];
$sql="insert into feesstatus(studentname,studentno,totalamount,paid) values('$nm','$no','$ta','$pa')";
$result=mysqli_query($con,$sql);
if($result)
{
echo"record inserted";
}
else
{
echo"failed to insert";
}
mysqli_close($con)
?>