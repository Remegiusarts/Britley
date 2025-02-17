<?php
$server="localhost";
$uname="root";
$pwd="";
$db="ecourse";
$con=mysqli_connect($server,$uname,$pwd,$db) or die('Failed to connect');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$query="insert into student values('$name','$email','$password')";
if($result=mysqli_query($con,$query))
{
	echo"<script>alert('Register Successfully 🤑');window.location.href='login.html';</script>";
}
else
{
	echo"Registration Error 🤧";
}

?>