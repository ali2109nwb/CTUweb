<?php
	include"connect.php"; 
	session_start();
if($_SESSION['admin'] == "")
{
header("location:index.php?e=Please login to administrator");
}
	$ID_guest = $_REQUEST['idguest'];
	$ID_news = $_REQUEST['idnews'];
	$ID_career = $_REQUEST['idcareer'];
	$ID_download = $_REQUEST['iddownload'];
	$ID_project = $_REQUEST['idproject'];
	$file = $_REQUEST['file'];
	$pic = $_REQUEST['img'];
	$oldimg = "brosur/".$file ;
	$oldpic = "project/".$pic;
	$tipe = $_REQUEST['tp'];
	

	if($tipe == 1)
	{
	$sql="delete from guest where ID_guest='$ID_guest'"; 
	mysql_query($sql); 
	mysql_close();
	header("location:home.php?s=Delete guest successfully");
	}
	if($tipe == 2)
	{
	$sql="delete from news where ID_news='$ID_news'";
	mysql_query($sql); 
	mysql_close();
	header("location:news.php?s=Delete news successfully");
	}
	if($tipe == 3)
	{

	$sql="delete from career where ID_career='$ID_career'";
	mysql_query($sql); 
	mysql_close();
	header("location:career.php?s=Delete job info successfully");
	}
	if($tipe == 4)
	{
			unlink($oldimg);
	$sql="delete from download where ID_download='$ID_download'";
	mysql_query($sql); 
	mysql_close();
	header("location:download.php?s=Delete download successfully");
	}
if($tipe == 5)
	{
			unlink($oldpic);
	$sql="delete from project where ID_project='$ID_project'";
	mysql_query($sql); 
	mysql_close();
	header("location:project.php?s=Delete project successfully");
	}


?>