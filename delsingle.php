<?php session_start();
if($_SESSION['var']!=1) die('direct access is not permitted')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style>body{background-image:url="img43.jpg";}</style>
<title>the_view_records_section</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" /> 
<meta name="keywords" content="put, your, keyword, here" /> 
<meta name="author" content="Templates.com - website templates provider" /> 
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page1">
<!-- header -->
<div id="header">
	<div class="container">
		<div class="wrapper"><center><h3><b><i>Viewing the records of the existing employees...</i></b></h3></center>
		</div>
		<font size=2 color="#990000" align="left">
		<li><a href="logout.php"> Logout</a></li>
		</font>
		<ul class="nav">
			<li><a href="homepage.php">click here to go to (Home)</a></li>
		</ul>
	</div>
</div>
<!-- content -->
<div id="content"><div class="inner_copy"></div>
	<div class="container">
		<div class="inside">
<!-- box begin -->
			<div class="box alt">						
								<em><h3>Welcome to record deletion section!</h3></em>
								<p><h4>Here, you can delete the information of the employees...</h4></p> 	
							
							 <form action="delsingleemp.php" method="POST">
         <font face="chiller" size=6><h4>Enter the employee code of the employee:</h4></font>
         <br>
		 <br>
         <center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" size=25 name="ec" value=""><center><br /><br />
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="SUBMIT"/>
         </form>
</div>
          <br />
<!-- box end -->
		</div>
	</div>
</div>
</body>
</html>

