<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed".mysqli_connect_errno();
}
$nm=$_post['studentname'];
$no=$_post['studentno'];
$dob=$_post['dob'];
$sd=$_post['standard'];
$ad=$_post['address'];
$pno=$post['phno'];
$bg=$_post['bloodgroup'];
$sql="insert into student(studentname,studentno,dob,standard,address,phno,bloodgroup)values('$nm,''$no','$dob','$sd','$ad','$ph no','$bg')";
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