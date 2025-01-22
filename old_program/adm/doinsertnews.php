<?php 
session_start();
$sub = $_REQUEST['subject'];
$content = $_REQUEST['news'];
$date = date("D, d/m/Y");
$user = $_SESSION['admin'];



if($sub == "")
{
	$_SESSION['datanews'] = $data = array($sub,$content,"News must fill in");
	header("location:insertnews.php");
}
else if($content == "")
{
	$_SESSION['datanews'] = $data = array($sub,$content,"Content must fill in");
	header("location:insertnews.php");
}

else
{
include"connect.php";
$sql = "insert into news values('','$content','$sub','$date','$user')";
mysql_query($sql) or die("failed to connect");
mysql_close();
header("location:news.php?s=Insert news successfully");
}


?>