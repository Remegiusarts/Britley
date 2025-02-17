<?php
session_start();
$server="localhost";
$uname="root";
$pwd="";
$db="ecourse";
$con=mysqli_connect($server,$uname,$pwd,$db) or die('db not connected');
$name=$_POST['name'] and $password=$_POST['password'];
$que="select * from student where name='$name'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
    {
    if($row['password']==$password)
    {
        $_SESSION['username']=$row['name'];
        $_SESSION['password']=$row['password'];

        echo"<script>alert('Verified ✔');window.location.href='payment.html';</script>";
    }
    else
    {
        echo "<script>alert('Incorrect Password 😶');window.location.href='logincou.html';</script>";
    }
  }
    else
    {
        echo "<script>alert('Incorrect Name 🙄');window.location.href='logincou.html';</script>";
    }

?>