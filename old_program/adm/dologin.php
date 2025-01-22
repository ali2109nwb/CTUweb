<?php
session_start();
include"connect.php";
$u = $_REQUEST['username'];
$p = $_REQUEST['password'];
if($u == "")
{
header("location:index.php?e=Username must fill in");
}

else if($p == "")
{
header("location:index.php?e=Password must fill in");
}

else
{
$sql ="select * from user where username='".md5($u)."' and password='".md5($p)."'";
$rs = mysql_query($sql) or die("failed connect to server");

if(mysql_num_rows($rs)==1)
{
$row = mysql_fetch_array($rs);
$_SESSION['admin']= $row[3];
header("location:home.php");
}
else 
{
header("location:index.php?e=Username or Password Invalid");
}
mysql_close();
}
?>