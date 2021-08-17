<?php 
include("setting.php");
session_start();
if(!isset($_SESSION['email']))
{
  header("location:welcome.php");
}
$email=$_SESSION['email'];
$a=mysqli_query($al, "SELECT * FROM customers WHERE email='$email'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tour &amp; Travels System</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body>
  <section id="welcomepg"> 
<div id="header">
  <nav>
  <div class=" animate__animated animate__backInLeft" align="center"> <span class="subHead">Welcome To<?php echo $name;?></span> </div>
  <div class=" animate__animated animate__backInLeft" align="center"> <span class="subhead">Travel Nature <?php echo $name;?></span> </div>
</div>
<br />
<br />
<div class=" animate__animated animate__backInRight" align="center"> <span class="headingMain">Where Journey Of Heaven Begins </span> <br />
  <br />
  <table border="0">
<tr><td  colspan="2" align="center"><a href="book.php" class="cmd"> About</a></td> </tr>
 <tr> <td  colspan="2" align="center"><a href="changePassword.php" class="cmd"> Destination</a></td></tr>
<tr><td colspan="2" align="center"><a href="logout.php" class="cmd">Logout</a></td></tr>
</table>
</nav>
</div>
</section>
</body>
</html>
