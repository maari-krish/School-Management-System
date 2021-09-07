<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed".mysqli_connect_errno();
}
$nm=$_POST['studentname'];
$no=$_POST['studentno'];
$dob=$_POST['dob'];
$sd=$_POST['standard'];
$ad=$_POST['address'];
$pno=$POST['phno'];
$bg=$_POST['bloodgroup'];
$sql="insert into student(studentname,studentno,dob,standard,address,phno,bloodgroup) values('$nm','$no','$dob','$sd','$ad','$pno','$bg')";
$result=mysqli_query($con,$sql);
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