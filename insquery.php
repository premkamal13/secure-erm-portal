<?php session_start();
if($_SESSION['var']!=1) die('direct access is not permitted')?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<style>
body{background-image:url('img21.jpg');}
</style>
<title>the_database_has_been_inserted</title>
</head>
<body link="#FFCCFF" alink="#0000FF">
<?php
$con=mysql_connect("localhost","root","root") or die ("Failed to communicate to the database");
mysql_select_db("employee",$con);
$qu= "INSERT INTO empdetail(emp_code,first_name,middle_name,last_name,dept_name,date, ph_no, email, salary) VALUES ('$_POST[ec]','$_POST[fn]','$_POST[mn]','$_POST[ln]','$_POST[DNa]','$_POST[Date]','$_POST[PNo]','$_POST[Ea]','$_POST[sal]')";
mysql_query($qu,$con);
?>
<font size=6 color="#FFFFFF"> <center> Records have successfully been inserted..
<br><br><br><a href="homepage.php"><img src="img12.jpg" width=300 height=300/><br /><br />HOME</a>
<br></center>
</font>
<center>
<font color="white" size=5>
click here to go to home...
</font>
</center>
</body>
</html>