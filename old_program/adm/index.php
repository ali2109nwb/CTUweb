<html>
<head><link href="style.css" rel="stylesheet" type="text/css" ></head>
<body>
<form action="dologin.php" method="post">
<table border="0" align="center" id="tablelogin">
  <tr>
    <td colspan="3" align="left" style="font-size:36px">CTU-INDONESIA</td>
  </tr>
  <tr>
    <td><span style="font-size:14px">Admin</span></td>
    <td><span style="font-size:14px">Password</span></td>
    <td width="37">&nbsp;</td>
  </tr>
  <tr>
    <td><input name="username" id="login" type="text"></td>
    <td><input name="password" id="login" type="password"></td>
    <td><input type="submit" value="Login" id="loginbutton"></td>
  </tr>
  <tr>
    <td colspan="3" align="center" >Administrator Area</td>
  </tr>
  <tr>
    <td colspan="3" align="center" ><div id="err"><?php echo $_REQUEST['e'];?></div></td>
  </tr>
  </table>
  </form>
</body>
</html>
