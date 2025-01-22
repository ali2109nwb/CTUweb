<?php
include"connect.php";
session_start();
$reply = $_REQUEST['reply'];
$user = $_SESSION['admin'];
$date = date("D, d/m/Y");
$idguest = $_REQUEST['id']; 
$sql = "select * from guest where id_guest ='$idguest' ";
$rs = mysql_query($sql);

while($row = mysql_fetch_array($rs))
{
	$a = $row[0];
	$b = $row[1];
	$c = $row[2];
	$d = $row[3];
	$e = $row[4];
}
mysql_close();
if($reply == "")
{
	header("location:reply.php?id=$id&e=Reply must fill in");
}
else
{
include"connect.php";
$sql="update guest set Reply='$reply', reply_by='$user', reply_date='$date' where id_guest='$idguest'";
mysql_query($sql);
mysql_close();
header('location:home.php?s=Update Successfully');
}
?>