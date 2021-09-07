<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed:".mysqli_connect_errno();
}
$no=$_post['studentno'];
$sql="delete from student where studentno='$no'";
$result=mysqli_query($con,$sql);
if($result)
{
echo"record deleted";
}
else
{
echo"failed to delete";
}
mysqli_close($con);
?>