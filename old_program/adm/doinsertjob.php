<?php 
session_start();
$sub = $_REQUEST['position'];
$content = $_REQUEST['description'];
$date = date("D, d/m/Y");
$user = $_SESSION['admin'];
if($sub == "")
{
	$_SESSION['datajob'] = $data = array($sub,$content,"Position must fill in");
	header("location:insertjob.php");
}
else if($content == "")
{
	$_SESSION['datajob'] = $data = array($sub,$content,"Job description must fill in");
	header("location:insertjob.php");
}

else
{
include"connect.php";
$sql = "insert into career values('','$date','$sub','$content','$user')";
mysql_query($sql) or die("failed to connect");
mysql_close();
header("location:career.php?s=Insert news successfully");
}


?>