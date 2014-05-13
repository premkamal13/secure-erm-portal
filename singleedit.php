<?php session_start();
if($_SESSION['var']!=1) die('direct access is not permitted')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style>body{background-image:url="img43.jpg";}</style>
<title>edit_data1</title>
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
		<div class="wrapper"><center><h3><i><b>Update the data in the form...</b></i></h3></center>
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
								<h3>Welcome to the data updating section!</h3>
								<p><h4>You are required to fill the following information-</h4></p> 
								<br /><br />
								
								
<?php
$con=mysql_connect("localhost","root","root") or die ("Failed to communicate to the database");
mysql_select_db("employee",$con);
$epc=$_POST['ec'];
$qu= "SELECT * FROM empdetail WHERE emp_code='$epc' ";
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
$sal1=$row[salary];
?>

								
							  <font face="monotype corsiva" color="#330000">
							  <FORM ACTION="upquery.php" METHOD="POST" >
                              <P> Fill in the details of the form.</P>
							  <hr width=750 align="center" />
									Employee Code <INPUT TYPE="number" SIZE=30 NAME="ec" VALUE=<?php print $epc ;?> readonly=" readonly" > <BR> <BR>
Employee Name: </P>><BR>
									<hr width=750 align="center" />
									<P> Employee Name </P>
											  &nbsp;&nbsp;First Name <INPUT TYPE="text" SIZE=30 NAME="fn" VALUE=<?php print $fnm;?>><BR>
											&nbsp;&nbsp;Middle Name <INPUT TYPE="text" SIZE=30 NAME="mn" VALUE=<?php print $mnm;?>><BR>
											&nbsp;&nbsp;Last Name <INPUT TYPE="text" SIZE=30 NAME="ln"  VALUE=<?php print $lnm;?>><BR>
											<hr width=750 align="center" /><BR>
										Department Name <INPUT TYPE="text" SIZE=30 NAME="DNa" VALUE=<?php print $depname; ?> ><BR><hr width=750 align="center" /><BR>
										Date of joining <INPUT TYPE="date" SIZE=20 NAME="Date" VALUE=<?php print $date;?> ><hr width=750 align="center" />
									<P>Contact details</P>
										Phone No. <INPUT TYPE="number" SIZE=30 NAME="PNo" VALUE=<?php print $phno; ?>><BR>
										Email address <INPUT TYPE="email" SIZE=30 NAME="Ea" VALUE=<?php print $em;?>><br /><hr width=750 align="center" /><br />
										Salary <INPUT TYPE="NUMBER" SIZE=30 NAME="sal" VALUE=<?php print $sal1;?>><hr widht=750 align="center"/>
										<br />			
										<p> Do you want to proceed ??? </p>
                                
                                            
    										<button type="button" onclick="alert('Ok, now click on the SUBMIT button')">YES</button>
											<a href="addrecords.php"><button type="button" onclick="alert('ok, fill the records again...')">NO</button></a>
 											
										<INPUT TYPE="hidden" NAME="stage" VALUE="register"><BR><BR>
										<INPUT TYPE="submit" NAME="sub" VALUE="Submit">
							  </FORM>
							  </font></div>
<!-- box end -->
		</div>
	</div>
</div>
</body>
</html>
