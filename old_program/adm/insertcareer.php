<?php 
include "connect.php";
session_start(); 
$user = $_SESSION['admin'];
if($_SESSION['admin'] == "")
{
header("location:index.php?e=Please login to administrator");
}
$datajob = $_SESSION['datajob'];
unset($_SESSION['datajob']);
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
<form action="doinsertjob.php" method="post">
  <table width="448" border="0" cellpadding="0" cellspacing="0" align="center" id="conus">
    <tr>
      <th colspan="2" scope="col" id="th"></th>
    </tr>
    <tr>
      <th colspan="2" align="center"  scope="col" >&nbsp;<div id="err"><?php echo $datajob[2]; ?><?php echo $_REQUEST['s']; ?></div></th>
    </tr>
    <tr>
      <th colspan="2" bgcolor="#CCCCCC" scope="col">INSERT CAREER</th>
    </tr>
    <tr>
      <td width="190" align="left">Job Position:</td>
      <td width="258" align="left"><input type="text" name="position" value="<?php echo $datajob[0]; ?>" /></td>
    </tr>
    <tr>
      <td width="190" align="left">Description:</td>
      <td align="left"><textarea name="description" rows="10" cols="40"><?php echo $datajob[1]; ?></textarea></td>
    </tr>
    <tr>
      <td align="left">&nbsp;</td>
      <td align="left"><input type="submit" /></td>
    </tr>
  </table>
  </form>
</div>
<div id="footer"><?php include"footer.php";?></div>
</div>
</body>
</html>