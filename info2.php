<?php session_start();
if($_SESSION['var']!=1) die('direct access is not permitted')?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style>body{background-image:url="img43.jpg";}</style>
<title>theemployeemanagementsystem_info2</title>
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
		<div class="wrapper"><center><h3><u>About the database structure...</u></h3></center>
		  <div class="logo">			</div>
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
								<h2>Welcome!</h2>
								<p><h3>Here, you can gather information about the contents of the database...</h3></p> 	
							
							<h4><br />This is a list of what details of the employees are stored in the database...</h4><br />
							<ol>
							<font face="monotype corsiva" color="#330000">
							  <li> EMPLOYEE NAME</li><br />
							  <li> EMPLOYEE CODE</li><br />
							  <li> EMPLOYEE'S DEPARTMENT</li><BR />
							  <LI> CELL NO</LI><BR />
							  <LI> EMAIL ID</LI><BR />
							  <LI> SALARY </LI><BR />
							  <LI> DATE OF JOINING </LI><BR />
							  </font>
			  </ol>
</div>
          <br />
			<div class="box">
				<div class="left-top-corner">
					<div class="right-top-corner">
						<div class="border-top"></div>
					</div>
				</div>
				<div class="border-left">
					<div class="border-right">
						<div class="inner">
							<h3>To know more...</h3><br />
							<dl>
								To view the records, go to <a href="viewrecords.php">I wish to view the records of the employees</a>...<br />
							</dl>
						</div>	
					</div>
				</div>
				<div class="left-bot-corner">
					<div class="right-bot-corner">
						<div class="border-bot"></div>
					</div>
				</div>
			</div>
<!-- box end -->
		</div>
	</div>
</div>
</body>
</html>
