<?php
session_start();
$reg=$_SESSION['reg'];
?>
<?php

$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed".mysqli_connect_errno();
}

$no=$_POST['no'];
if($reg==$no)
{
$sql="select*from student where studentno='$no'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$nm=$row['studentname'];
$no=$row['studentno'];
$dob=$row['dob'];
$sd=$row['standard'];
$ad=$row['address'];
$pno=$row['phno'];
$bg=$row['bloodgroup'];
echo"<table border='1' align='center'>";
echo"<tr><th>";
echo"<td>studentname</td>";
echo"<td>studentno</td>";
echo"<td>dob</td>";
echo"<td>standard</td>";
echo"<td>address</td>";
echo"<td>phno</td>";
echo"<td>bloodgroup</td>";
echo"</th></tr>";
echo"<tr><td>";
echo"<td>$nm</td>";
echo"<td>$no</td>";
echo"<td>$dob</td>";
echo"<td>$sd</td>";
echo"<td>$ad</td>";
echo"<td>$pno</td>";
echo"<td>$bg</td>";
echo"<body bgcolor='orange'>";
}
}
else
{
echo"Dont enter others reg num";
}
?>