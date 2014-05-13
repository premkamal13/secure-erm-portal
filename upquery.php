<?php session_start();
if($_SESSION['var']!=1) die('direct access is not permitted')?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<style>
body{background-image:url('img21.jpg');}
</style>
<title>the_database_has_been_updated</title>
</head>
<body link="#FFCCFF" alink="#0000FF">

<?php
$con=mysql_connect("localhost","root","root") or die ("Failed to communicate to the database");
mysql_select_db("employee",$con);
$epcode=$_POST['ec'];
$fnm=$_POST['fn'];
$mnm=$_POST['mn'];
$lnm=$_POST['ln'];
$dna=$_POST['DNa'];
$dat=$_POST['Date'];
$phno=$_POST['PNo'];
$email=$_POST['Ea'];
$sal=$_POST['sal'];
$qu= " update empdetail set first_name='$fnm',middle_name='$mnm',last_name='$lnm',dept_name='$dna',date='$dat',ph_no='$phno',email='$email',salary='$sal' where emp_code='$epcode' ";
$result=mysql_query($qu);
?>

<font size=6 color="#FFFFFF"> <center> Records have successfully been updated..
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