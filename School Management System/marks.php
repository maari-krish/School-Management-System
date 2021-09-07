<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno($con))
{
echo"connection failed:".mysqli_connect_errno();
}
$no=$_POST['no'];
$sql="select * from marks where studentno='$no'";
$result=mysqli_query($con,$sql);
if($result)
{
while($row=mysqli_fetch_array($result))
{
$n=$row['studentno'];
$nm=$row['studentname'];
$eng=$row['english'];
$tam=$row['tamil'];
$mat=$row['maths'];
$sci=$row['science'];
$soc=$row['social'];
$tot=$eng+$tam+$mat+$sci+$soc;
$avg=$tot/5;
echo"<table border='1' align='center'>";
echo"<tr><th>";
echo"<td>studentno</td>";
echo"<td>studentname</td>";
echo"<td>english</td>";
echo"<td>tamil</td>";
echo"<td>maths</td>";
echo"<td>science</td>";
echo"<td>social</td>";
echo"<td>total</td>";
echo"<td>average</td>";
echo"</th></tr>";
echo"<tr><td>";
echo"<td>$no</td>";
echo"<td>$nm</td>";
echo"<td>$eng</td>";
echo"<td>$tam</td>";
echo"<td>$mat</td>";
echo"<td>$sci</td>";
echo"<td>$soc</td>";
echo"<td>$tot</td>";
echo"<td>$avg</td>";
echo"<body background='orangetex.jpg' height='20000' width='23000'>";
echo"</tr></td>";
}
}
else
{
echo"No matching result found";
}
?>