<?php
include("setting.php");
session_start();
if(isset($_SESSION['aid']))
{
	header("location:ahome.php");
}
$e=mysqli_real_escape_string($al, $_POST['aid']);
$p=mysqli_real_escape_string($al, $_POST['pass']);
if($_POST['aid']!=NULL && $_POST['pass']!=NULL)
{
	$pp=sha1($p);
	$sql=mysqli_query($al, "SELECT * FROM admin WHERE aid='$e' AND password='$pp'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['aid']=$e;
		header("location:ahome.php");
	}
	else
	{
		$info="Incorrect Admin ID or Password";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel &amp; Nature</title>

<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>

<section id="adminbg">

<div class="header">

<div align="center">

<span class="subHead">Admin Login</span>

<form method="post" action="">
<table border="0" align="center" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" class="info" align="center"><?php echo $info;?></td></tr>
<tr><td class="labels">Admin ID : </td><td><input type="text" size="25" name="aid" class="fields" placeholder="Enter Admin ID" required="required" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" size="25" name="pass" class="fields" placeholder="Enter Password" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Login" class="fields" /></td></tr>
</table>
</form>

<br>

<a href="home.php" class="link">BACK</a>
</div>
</div>

</section>

</body>

</html>