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
								<em><h3>Welcome to record viewing section!</h3></em>
								<p><h4>Here, you can gather information about the employees...</h4></p> 	
							
							<h5><br />Select whether you want to view the record of a single employee or all the employees...</h5><br /><br />
							<ol>
							<font face="monotype corsiva" color="#330000">
							  <li> <h3><a href="prevsingleemp.php">Single employee</a></h3>: to view the record of a single employee...<hr /><br /><br />
							  </li><li> <h3><a href="allemp.php">All employees</a></h3>: to view the records of all the employees<hr /></li>
							  </font>
			  </ol>
</div>
          <br />
<!-- box end -->
		</div>
	</div>
</div>
</body>
</html>

