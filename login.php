<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php require("logincheck.php");?>
<html>
<head>
<style>
body{background-image:url('img21.jpg');}
</style>
<title>ENTERING_THE_EMPLOYEE_MANAGEMENT_SYSTEM</title>
</head>
<body link="blue">
<?php
if($_POST['username']==''||$_POST['password']=='')
{
?><p><p><p><center><font color="white" face="monotype corsiva"><h1>invalid input</h1></font></center>
<br><br>
<center>
return <a href="1passwordprotection.php">back</a>
<?php
}
elseif($_POST['username']!=$myusername||$_POST['password']!=$mypassword)
{
?>
<center><h1><p><p><p><font color="white" face="monotype corsiva">incorrect username or password!!!</font></h1></center>
<br><br>
<center>
return <a href="1passwordprotection.php">back</a>
<?php
}
else
{
 $_SESSION['var']=1;
?>
<font size=6 color="#FFFFFF"> <center>You have successfully logged in...
<br><br><br><a href="homepage.php">CLICK HERE</a>
<br></center>
</font>
<center>
<font color="white" size=5>
to go to home...
</font>
</center>
<br><br><br><br>
<marquee><img src="img12.jpg" height="300" width="300"></marquee>
<?php
}
?>
</body>
</html>