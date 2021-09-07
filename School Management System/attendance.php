<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed".mysqli_connect_errno();
}
$no=$_POST['no'];
$sql="select * from attendance where studentno='$no'";
$result=mysqli_query($con,$sql);
if(result)
{
while($row=mysqli_fetch_array($result))
{
$nm=$row['studentname'];
$id=$row['studentno'];
$lv=$row['leave'];
echo"<table  border='1' align='center'>";
echo"<tr><th>";
echo"<td>name</td>";
echo"<td>id</td>";
echo"<td>total leave</td>";
echo"</th></tr>";
echo"<tr><td>";
echo"<td>$nm</td>";
echo"<td>$id</td>";
echo"<td>$lv</td>";
echo"<body bgcolor='red'>";
echo"</tr></td>";
}
}
?>