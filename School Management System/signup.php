<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno($con))
{
echo"connection failed:".mysqli_connect_errno();
}
$reg=$_POST['reg'];
$pass=$_POST['password'];
$sql="insert into studentlogin(regno,password) values('$reg','$pass')";
$result=mysqli_query($con,$sql);
if($result)
{
echo"signup success";
}
else
{
echo"signup failed";
echo"<body bgcolor='yellow'>";
}
?>