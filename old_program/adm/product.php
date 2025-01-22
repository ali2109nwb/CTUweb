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
<br/><center><label style="color:#0F0"><?php echo $_REQUEST['s']; ?></center></label>
  <table width="961" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#CCCCCC" align="center">
      <td colspan="10" height="25"><a style="background-color:#FFF" href="selectcategory.php" id="back">> INSERT PRODUCT</a></td>
      </tr>
    <tr bgcolor="#CCCCCC" align="center">
      <td width="74">ID Product</td>
      <td width="136">Product name</td>
      <td width="115">Category</td>
      <td width="129">Sub category</td>
      <td width="100">Price</td>
      <td width="92">Quantity</td>
      <td width="72">Weight</td>
      <td width="77">Multi S &amp; C</td>
      <td width="72">Edit</td>
      <td width="72">Detail</td>
    </tr>
    <?php 
	include"connect.php";
	$sql = "select * from product order by id_product desc";
	$rs = mysql_query($sql) or die("Failed connect to server");
	while($row = mysql_fetch_array($rs))
	{
	?>
    <tr align="center">
      <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[3]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
      <td><?php if($row['5'] != ""){echo "Rp. ".number_format($row[5]); }else{ echo " See detail ";}?></td>
      <td><?php if($row['6'] != ""){echo $row[6]." pcs";}else{ echo " See detail ";} ?></td>
      <td><?php echo $row[8]."/kg"; ?></td>
      <td><?php echo $row[13]; ?></td>
      <td><form action="editproduct.php" method="post" name="editproduct" id="detailoder">
        <input name="id" type="hidden" value="<?php echo $row[0]; ?>" />
        <input type="submit" id="buttonbag" value="Edit" />
      </form></td>
      <td><form action="detailproduct.php" method="post" name="detaiproduct" id="detailoder">
        <input name="product" type="hidden" value="<?php echo $row[0]; ?>" />
        <input type="submit" id="buttonbag" value="Detail" />
      </form></td>
    </tr>
    <?php }?>
  </table>
  <br/>
</div>
<div id="footer"><?php include"footer.php";?></div>
</div>
</body>
</html>