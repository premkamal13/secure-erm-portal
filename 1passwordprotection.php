

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<style>
body{background-image:url("img22.jpg");}
</style>
<TITLE>ENTERING_THE_EMPLOYEE_MANAGEMENT_SYSTEM</TITLE>
</HEAD>
<BODY text="#000000">
<center><FONT FACE="monotype corsiva" SIZE=16 COLOR="#FFFFFF">

Welcome to Employee Management System!!!
<HR width=750 align="center">
</font></center> 
<marquee direction="right" behaviour="scroll">
<HR width=1200 color="#666666" align="center">
</marquee>
<!--
<?php
if(isset($SESSION['logedin']))
{
header('Location: home.php');
}
?>-->
<br>
<br>
<br>
<FORM ACTION="login.php" METHOD="POST">
<center>
<P>
<font size=6 color="#FFCCFF">Enter the username and the password:</font>
</P>
USERNAME: 
<INPUT TYPE="text" name="username" value=""/>
<BR>
PASSWORD:
<INPUT TYPE="password" name="password" value=""/>
<br>
<INPUT TYPE="SUBMIT" NAME="SUBMIT" VALUE="LOGIN"/>
<?php
define('MyConst', TRUE);
?>
</center>
</FORM>
<br><br><br><br><BR><BR><br><br><br><br>
<marquee direction="right" behaviour="scroll">
<HR width=1200 color="#666666" align="center">
</marquee>
<font color="white">a project by---<br></font>
<font face="monotype corsiva" align="left" color="white" size=3>- Prem Kamal<br>&<br>Tanmay Rakshit</font>
</font></body>
</html>