<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed:".mysqli_connect_errno();
}
$no=$_POST['studentno'];
$sql="delete from attedance where studentno='$no'";
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