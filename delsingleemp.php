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
$qu= "DELETE FROM empdetail WHERE emp_code='$_POST[ec]' ";
mysql_query($qu,$con);
?>
<br />
<br />
<center> <h1> <font color="#000099"> The record has been successfully deleted!!! </font></h1></center>
</font>
</tr>
</table>
</body>
</html>
