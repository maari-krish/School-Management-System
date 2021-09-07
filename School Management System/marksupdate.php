<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed:".mysqli_connect_errno();
}
$no=$_POST['studentno'];
$en=$_POST['english'];
$ta=$_POST['tamil'];
$ma=$_POST['maths'];
$sci=$_POST['science'];
$soc=$_POST['social'];
$sql="update marks SET english='$en',tamil='$ta',maths='$ma',science='$sci',social='$soc' where studentno='$no'";
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