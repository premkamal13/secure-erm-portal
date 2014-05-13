<?php session_start();
if($_SESSION['var']!=1) die('direct access is not permitted')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>
body{background-image:url('img11.jpg');}
</style>
<title>Untitled Document</title>
</head>

<body>
<font size=4 color="#0000FF"> <center>
<br>go to<br /><a href="homepage.php"><img src="img12.jpg" width=100 height=100/><br />HOME</a>
<br></center>
</font>
<br /><br>
<?php
$con=mysql_connect("localhost","root","root") or die ("Failed to communicate to the database");
mysql_select_db("employee",$con);
$qu= "SELECT * FROM empdetail WHERE emp_code='$_POST[ec]' ";
$res=mysql_query($qu,$con);
$row=mysql_fetch_array($res);
$epcode=$row[emp_code];
$fnm=$row[first_name];
$mnm=$row[middle_name];
$lnm=$row[last_name];
$depname=$row[dept_name];
$date=$row[date];
$phno=$row[ph_no];
$em=$row[email];
$sal=$row[salary];
?>
<br />
<br />
<table border="1" caption="single_emp table">

 <tr>
 <font color="red" face="monotype corsiva">
<th>Employee Code</th>
 <th>First Name</th>
 <th>Middle name</th>
  <th>Last Name</th>
<th>Department Name</th>
<th>Date of Joining</th>
<th>Phone no.</th>
<th>Email address</th>
<th>Salary</th>
</font>
 <font color="red">
<?php 			
echo "<tr>";
echo "<td>".$epcode."</td>";
echo "<td>".$fnm."</td>";
echo "<td>".$mnm."</td>";
echo "<td>".$lnm."</td>";
echo "<td>".$depname."</td>";
echo "<td>".$date."</td>";
echo "<td>".$phno."</td>";
echo "<td>".$em."</td>";
echo "<td>".$sal."</td>";
				 
?>
</font>
</tr>
</table>
</body>
</html>
