
<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno($con))
{
echo"failed to connect to mysqli".mysqli_connect_errno();
}
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="select * from admin where username='$user' and password='$pass'";
$result=mysqli_query($con,$sql);
$cnt=mysqli_num_rows($result);
if($cnt==1)
{
echo"login success";
echo"<br>";
echo"<A HREF='student.html'>student details</a>";
echo"<br>";
echo"<A HREF='studentinsert.html'>sinsert</a>";
echo"<br>";
echo"<A HREF='studentupdate.html'>supdate</a>";
echo"<br>";
echo"<A HREF='studentdelete.html'>sdelete</a>";
echo"<br>";
echo"<A HREF='marks.html'>mark</a>";
echo"<br>";
echo"<A HREF='marksinsert.html'>markinsert</a>";
echo"<br>";
echo"<A HREF='marksupdate.html'>marksupdate</a>";
echo"<br>";
echo"<A HREF='marksdelete.html'>marksdelete</a>";
echo"<br>";
echo"<A HREF='attendance.html'>attendance</a>";
echo"<br>";
echo"<A HREF='attendanceinsert.html'>attinsert</a>";
echo"<br>";
echo"<A HREF='attendanceupdate.html'>attupdate</a>";
echo"<br>";
echo"<A HREF='attendancedelete.html'>attdelete</a>";
echo"<br>";
echo"<A HREF='feesstatus.html'>fees</a>";
echo"<br>";
echo"<A HREF='feesstatusinsert.html'>feesinsert</a>";
echo"<br>";
echo"<A HREF='feesstatusupdate.html'>feesupdate</a>";
echo"<br>";
echo"<A HREF='feesstatusdelete.html'>feesdelete</a>";
echo"<body bgcolor='orange'>";
}
else
{
echo"login failed";
}
mysqli_close($con);
?>