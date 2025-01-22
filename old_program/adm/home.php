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
<div id="menu">
  <?php include"menu.php"; ?>
</div>
<div id="sub"><?php include"sub.php";?></div>
<div id="content">
<br/>
  <table width="961" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#CCCCCC" align="center">
    <td width="117">POSTED DATE</td>
      <td width="237">EMAIL</td>
      <td width="164">FROM</td>
       <td width="137">REPLY BY</td>
       <td width="140">REPLY DATE</td>
       <td width="71">REPLY</td>
       <td width="79">DELETE</td>
       </tr>
    <?php 
	$sql = "select * from guest";
	$rs = mysql_query($sql) or die("Failed connect to server");
	while($row = mysql_fetch_array($rs))
	
	{
	?>
    <tr align="center">
    <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
      <td><?php echo $row[3]; ?></td>
      <td><?php echo $row[6]; ?></td>
      <td><?php echo $row[7]; ?></td>
      <td rowspan="5"><br/><form name="reply" method="post" action="reply.php">
      <input name="id" type="hidden" value="<?php echo $row[0]; ?>" />
        <input type="submit" id="buttonbag" value="reply" />
      </form><br/></td>
      <td rowspan="5" id="tabcon"><a id="buttonbag" href="dodelete.php?idguest=<?php echo $row[0]; ?>&tp=1">delete</a></td>
    </tr>
    <tr align="center">
      <td colspan="5" bgcolor="#CCCCCC">DESCRIPTION</td>
      </tr>
    <tr align="left">
      <td colspan="5" style="padding:5px;"><?php echo $row[4]; ?></td>
      </tr>
    <tr align="center" bgcolor="#CCCCCC">
      <td colspan="5">REPLY</td>
      </tr>
    <tr align="left" >
      <td colspan="5" style="padding:5px;"><?php if($row[5] == ""){echo "please reply this message from guest";}else {echo $row[5];} ?></td>
      </tr>
    <?php }?>
  </table>
  <br/>
</div>
<div id="footer"><?php include"footer.php";?></div>
</div>
</body>
</html>