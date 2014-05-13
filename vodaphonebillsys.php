<html>
<head>
</head>
<body bgcolor ="cyan">
<font color="red"><center><h1>Vodaphone Bill System</h1></center></font>
<center>
<?php
$sms=400;
$mms=50;
$localcall=100;

$total= 1*$sms + 5*$mms+0.50*$localcall;
echo "Total is "."$total"."<br>";
$servicetax=(12.36*$total)/100;
$grandtotal=$total+$servicetax;

echo "grand total is "."$grandtotal"."<br>";
if($grandtotal>500)
{
$discount=10;
}
else $discount=0;
echo "Discount is "."$discount"."<br>";
$finalprice=$grandtotal-($grandtotal*$discount)/100;
echo "Final price is "."$finalprice"."<br>";
?>
</center>
</body>
</html>
