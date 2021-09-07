<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed".mysqli_connect_errno();
}
$no=$_POST['no'];
$sql="select * from feesstatus where studentno='$no'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$nm=$row['studentname'];
$no=$row['studentno'];
$ta=$row['totalamount'];
$pa=$row['paid'];
$bal=$row['balance'];
$bal=$ta-$pa;
echo"<table  border='1' align='center'>";
echo"<tr><th>";
echo"<td>studentname</td>";
echo"<td>studentno</td>";
echo"<td>totalamount</td>";
echo"<td>paid</td>";
echo"<td>balance</td>";
echo"</th></tr>";
echo"<tr><td>";
echo"<td>$nm</td>";
echo"<td>$no</td>";
echo"<td>$ta</td>";
echo"<td>$pa</td>";
echo"<td>$bal</td>";
echo"<body bgcolor='grey'>";
echo"</tr></td>";
}
?>