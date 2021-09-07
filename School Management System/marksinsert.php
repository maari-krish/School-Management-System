<?php
$con=mysqli_connect("localhost","root","","school");
if(mysqli_connect_errno())
{
echo"connection failed:".mysqli_connect_errno();
}
$nm=$_POST['studentname'];
$no=$_POST['studentno'];
$en=$_POST['english'];
$ta=$_POST['tamil'];
$ma=$_POST['maths'];
$sci=$_POST['science'];
$soc=$_POST['social'];
$sql="insert into marks(studentname,studentno,english,tamil,maths,science,social)values('$nm','$no','$en','$ta','$ma','$sci','$soc')";
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