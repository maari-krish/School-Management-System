<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno($con))
{
echo"failed to connect to mysqli".mysqli_connect_errno();
}
$reg=$_POST['regno'];
$pass=$_POST['password'];
$sql="select * from studentlogin where regno='$reg' and password='$pass'";
$result=mysqli_query($con,$sql);
$cnt=mysqli_num_rows($result);
if($cnt==1)
{
echo"login success";
echo"<br>";
echo"<A HREF='student.html'>student details</a>";
echo"<body bgcolor='green'>";
}
else
{
echo"login failed";
}
mysqli_close($con);
?>
<?php
session_start();
$_SESSION['reg']=$reg;
?>