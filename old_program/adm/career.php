<?php 
include "connect.php";
session_start(); 
$user = $_SESSION['admin'];
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
    <td colspan="4" height="25"><a style="background-color:#FFF" href="insertcareer.php" id="back">> INSERT CAREER</a></td>
      </tr>
    <tr bgcolor="#CCCCCC" align="center">
      <td>POSTED DATE</td>
      <td>POSTED BY</td>

      <td width="67">Delete</td>
    </tr>
    <?php 
	$sql = "select * from career";
	$rs = mysql_query($sql) or die("Failed connect to server");
	while($row = mysql_fetch_array($rs))
	
	{
	?>
    <tr align="center">
    <td><?php echo $row[1]; ?></td>
      <td ><?php echo $row[4]; ?></td>
      <td rowspan="5" id="tabcon"><a id="buttonbag" href="dodelete.php?idcareer=<?php echo $row[0]; ?>&tp=3">delete</a></td>
    </tr>
    <tr align="center">
      <td colspan="2" bgcolor="#CCCCCC">JOB POSITION</td>
      </tr>
    <tr align="left">
      <td colspan="2" style="padding:5px;"><?php echo $row[2]; ?></td>
      </tr>
    <tr align="center">
      <td colspan="2" bgcolor="#CCCCCC">DESCRIPTION</td>
      </tr>
    <tr align="left">
      <td colspan="2"><textarea name="text" cols="50" rows="5" disabled="disabled" readonly="readonly" id="text"  ><?php echo $row[3]; ?></textarea></td>
      </tr>
    <?php }?>
  </table>
  <br/>
</div>
<div id="footer"><?php include"footer.php";?></div>
</div>
</body>
</html>