<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed:".mysqli_connect_errno();
}
$nm=$_POST['studentname'];
$no=$_POST['studentno'];
$lv=$_POST['leave'];
$sql="update attendance SET leave='$lv' where studentno='$no'";
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