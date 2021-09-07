<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed:".mysqli_connect_errno();
}
$nm=$_POST['studentname'];
$no=$_POST['studentno'];
$dob=$_POST['dob'];
$sd=$_POST['standard'];
$ad=$_POST['address'];
$pno=$_POST['phno'];
$bg=$_POST['bloodgroup'];
$sql="update student SET studentname='$nm',dob='$dob',standard='$sd',address='$ad',phno='$phno' where studentno='$no'";
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