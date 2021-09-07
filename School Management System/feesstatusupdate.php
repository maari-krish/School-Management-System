<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed:".mysqli_connect_errno();
}
$no=$_POST['studentno'];
$ta=$_POST['totalamount'];
$pa=$_POST['paid'];
$sql="update feesstatus SET totalamount='$ta',paid='$pa' where studentno='$no' ";
$result=mysqli_query($con,$sql);
if($result)
{
echo"record updated";
}
else
{
echo"failed to update";
}
mysqli_close($con);
?>