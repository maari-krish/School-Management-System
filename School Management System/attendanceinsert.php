<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed:".mysqli_connect_errno();
}
$nm=$_POST['studentname'];
$no=$_POST['studentno'];
$lv=$_POST['leave'];
$sql="insert into attendance(studentname,studentno,leave)values('$nm','$no','$lv')";
$result=mysqli_query($con,$sql);
echo $sql;
if($result)
{
echo"record inserted";
}
else
{
echo"failed to insert";
}
mysqli_close($con);
?>