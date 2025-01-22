<?php 
session_start();
$sub = $_REQUEST['projectname'];
$content = $_REQUEST['projectdescription'];
$date = date("D, d/m/Y");
$user = $_SESSION['admin'];
$imgname = $_FILES['image_project']['name'];
$imgsize = $_FILES['image_project']['size'];
$imgtype = $_FILES['image_project']['type'];
$imgerr = $_FILES['image_project']['error'];
$post 		= strpos($imgname,"."); 
$partname 	= substr($imgname,0,$post);
$temp 		= $partname.date("dmYHis"); 
$ext 		= substr($imgname,$post,strlen($imgname)-$post);
$namafile = $temp.$ext;
$save = "./project/".$namafile;
$number = "^[0-9]+$";



if($sub == "")
{
	$_SESSION['dataproject'] = $data = array($sub,$content,"Project name must fill in");
	header("location:insertproject.php");
}
else if($content == "")
{
	$_SESSION['dataproject'] = $data = array($sub,$content,"Project description must fill in");
	header("location:insertproject.php");
}
else if($imgname == "")
{
	header("location:insertproject.php?e=Project image must fill in");
}
else if($imgsize > 1000000)
{
header("location:insertproject.php?e=Project Image size max 500 kb");
}

else if($imgerr > 0)
{
header("location:insertproject.php?e=Project Image error during upload, try again");

}

else if($imgtype !== "image/gif" and $imgtype !== "image/jpg" and $imgtype !== "image/jpeg" and $imgtype !== "image/png" and $imgtype !== "image/bmp")
{
header("location:insertproject.php?e=Invalid Project image format");
}
else
{
include"connect.php";
move_uploaded_file($_FILES['image_project']['tmp_name'],$save);
$sql = "insert into project values('','$user','$date','$sub','$namafile','$content')";
mysql_query($sql) or die("failed to connect");
mysql_close();
header("location:project.php?s=Insert project successfully");
}


?>