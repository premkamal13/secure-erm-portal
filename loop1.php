<html>
<head>
</head>
<body bgcolor="cyan">
<?php
$i=1;
$j=1;
while($i<6)
{
for($j=1;$j<=$i;$j++)
{
echo $j." ";
}
echo "<br>";
$i++;
}
$i-=2;
while($i>0)
{
for($j=1;$j<=$i;$j++)
{
echo $j." ";
}
echo "<br>";
$i--;
}
?>

</body>
</html>
