<?php 
include "connect.php";
session_start(); 
if($_SESSION['admin'] == "")
{
header("location:index.php?e=Please login to administrator");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css"  />
<title>Untitled Document</title>
</head>
<body>
<div id="wrapper">
<div id="header"><?php include"header.php"; ?></div>
<div id="menu"><?php include"menu.php"; ?></div>
<div id="sub"><?php include"sub.php";?></div>
<div id="content">
<br/>
  <table width="961" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#CCCCCC" align="center">
    <td colspan="3" height="25"><a style="background-color:#FFF" href="insertproject.php" id="back">> INSERT PROJECT</a></td>
      </tr>
 
    <?php 
	$sql = "select * from project";
	$rs = mysql_query($sql) or die("Failed connect to server");
	while($row = mysql_fetch_array($rs))
	
	{
	?>
       <tr bgcolor="#CCCCCC" align="center">
      <td width="480">POSTED DATE</td>
      <td width="402">POSTED BY</td>
      <td width="71">Delete</td>
    </tr>
    <tr align="center">
    <td><?php echo $row[2]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td rowspan="7"  id="tabcon"><a id="buttonbag" href="dodelete.php?idproject=<?php echo $row[0]; ?>&tp=5&img=<?php echo $row[4]; ?>">delete</a></td>
    </tr>
    <tr align="center">
      <td colspan="2"  bgcolor="#CCCCCC" >PROJECT</td>
      </tr>
    <tr align="left">
      <td colspan="2" style="padding:5px;"><?php echo $row[3]; ?></td>
      </tr>
        <tr align="center">
      <td colspan="2" bgcolor="#CCCCCC">PROJECT PICTURE</td>
      </tr>
    <tr align="left">
      <td colspan="2" style="padding:5px;" align="center"><img src="project/<?php echo $row[4];?>" alt="" width="100" height="100" /></td>
      </tr>
    <tr align="center">
      <td colspan="2" bgcolor="#CCCCCC">PROJECT DESCRIPTION</td>
      </tr>
    <tr align="left">
      <td colspan="2" style="padding:5px;"><?php echo $row[3]; ?></td>
      </tr>
    <?php }?>
  </table>
  <br/>
</div>
<div id="footer"><?php include"footer.php";?></div>
</div>
</body>
</html>