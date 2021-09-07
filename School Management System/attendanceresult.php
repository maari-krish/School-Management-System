<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed".mysqli_connect_errno();
}
$sn=1;
$sql="select*from student";
$result=mysqli_query($con,$sql);
echo"<h2 align="center">
while($row=mysqli_fetch_array($result))
{
$sn=$row['studentno'];
$sna=$row['studentname'];
$dt=$row['date'];
$tl=$row['totalleave'];
echo",tr>";
echo"<td>$sn</td>;
echo"<td>$sna</td>;
echo"<td>$dt</td>;
echo"<td>$tl</td>;
echo"</tr>";
$sn++;
}
?>