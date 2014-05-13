<?php session_start();
if($_SESSION['var']!=1) die('Direct access is not permitted. Go to the start page-home.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style>body{background-image:url="img43.jpg";}</style>
<title>theemployeemanagementsystem_homepage</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page1">
<!-- header -->
<div id="header">
	<div class="container">
		<div class="wrapper">
		  <div class="logo"><center><h3>
			     THE EMPLOYEE MANAGEMENT SYSTEM database manager Section
			</h3></center>
			</div>
		</div>
		<font size=2 color="#990000" align="left">
		<li><a href="logout.php"> Logout</a></li>
		</font>
		<ul class="nav">
			<li><a href="homepage.php">Home</a></li>
			<li><a href="addrecords.php">New Employee</a></li>
			<li><a href="viewrecords.php">Working Employee</a></li>
			<li><a href="editrecords.php">Edit details</a></li>
		</ul>
	</div>
</div>
<!-- content -->
<div id="content"><div class="inner_copy"></div>
	<div class="container">
		<div class="inside">
<!-- box begin -->
			<div class="box alt">
				<div class="left-top-corner">
					<div class="right-top-corner">
						<div class="border-top"></div>
					</div>
				</div>
				<div class="border-left">
					<div class="border-right">
						<div class="inner">
							<div class="wrapper">
								<h2>Welcome!</h2>
								<p>You are in the employee management section. <br>Here is detail of all the employees working in this company...</p> 
								
							</div>
							click on <a href="addrecords.php"> New Employee </a>to-insert data of a new employee.<br /><br />
							click on <a href="viewrecords.php"> Working Employee </a>to view the records of a working employee.<br /><br />
							click on <a href="editrecords.php"> Change Details </a>to edit the records of a working employee.
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
<!-- box begin -->
			<div class="box">
				<div class="left-top-corner">
					<div class="right-top-corner">
						<div class="border-top"></div>
					</div>
				</div>
				<div class="border-left">
					<div class="border-right">
						<div class="inner">
							<h3><u>Info of the system...</u></h3>
							<dl>
								<dt><a href="info1.php">About the system</a></dt>
								<dd>The EMS has been developed to override the problems prevailing in the practicing manual system. This software is supported to eliminate and in some cases reduce the hardships faced by this existing system. Moreover this system is designed for the particular need of the company to carry out operations in a smooth and effective manner.</dd>
								<dt><a href="info2.php">About the database</a></dt>
								<dd>The database consists of details of employees including - employee names, employee codes, department name, contact details, email.addresses, salary, date of joining</dd>
								<dt><a href="info3.php">Importance</a></dt>
								<dd>Employee management makes it easy to check and track human resources department at the press of a button. It makes the system easy to monitor and manage employees from different location...</dd>
								
								To delete the details, click on  <a href="delsingle.php">DELETE DETAILS...</a>
								
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
<!-- footer -->
<div id="footer">
	<div class="container">
	<div class="fleft"><font face="monotype corsiva" color="#CC0000" size=5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <br />
	</font>
			<div class="fright"><font face="monotype corsiva" color="#000000" size=8><a href="ourdetails.php"><img alt="project_developers" src="img17.jpg" width=140 height=100/><br>To meet the project developers...... click here</a></font></div>
	  </div>
	</div>
</div>
</body>
</html>