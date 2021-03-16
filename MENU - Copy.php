<?php
include 'connect.php';
$q="select * from appetizers ";
$r=mysqli_query($con,$q) or die('Query not executed');
echo '<table border="2px" bgcolor="#ffffcc" cellspacing="7" cellpadding="7" width="100%" align="center">';
echo '<tr>';
echo '<th>APPETIZERS</th>';
echo '</tr>';
echo '<tr>';
echo '<th>MENU</th>';
echo '<th>PRICE</th>';
echo '</tr>';
while($row=mysqli_fetch_array($r))
{
	echo '<tr>';
	echo '<td>'.$row["MENU"].'</td>';
	echo '<td>'.$row["PRICE"].'</td>';
	echo '</tr>';
}
echo '</table>';


$p="select * from tandoori ";
$s=mysqli_query($con,$p) or die('Query not executed');
echo '<table border="2px" bgcolor="#ffffcc" cellspacing="7" cellpadding="7" width="100%" align="center">';
echo '<tr>';
echo '<th>TANDOORI</th>';
echo '</tr>';
echo '<tr>';
echo '<th>MENU</th>';
echo '<th>PRICE</th>';
echo '</tr>';
while($row=mysqli_fetch_array($s))
{
	echo '<tr>';
	echo '<td>'.$row["MENU"].'</td>';
	echo '<td>'.$row["PRICE"].'</td>';
	echo '</tr>';
}
echo '</table>';
$r="select * from breads ";
$t=mysqli_query($con,$r) or die('Query not executed');
echo '<table bgcolor="#ffffcc" border="2px" cellspacing="7" cellpadding="7" width="100%" align="center">';
echo '<tr>';
echo '<th>INDIAN BREADS/ROTI</th>';
echo '</tr>';
echo '<tr>';
echo '<th>MENU</th>';
echo '<th>PRICE</th>';
echo '</tr>';
while($row=mysqli_fetch_array($t))
{
	echo '<tr>';
	echo '<td>'.$row["MENU"].'</td>';
	echo '<td>'.$row["PRICE"].'</td>';
	echo '</tr>';
}
echo '</table>';


$c="select * from maincourse ";
$d=mysqli_query($con,$c) or die('Query not executed');
echo '<table bgcolor="#ffffcc" border="2px" cellspacing="7" cellpadding="7" width="100%" align="center">';
echo '<tr>';
echo '<th>MAIN COURSE</th>';
echo '</tr>';
echo '<tr>';
echo '<th>PANEER SPECIAL</th>';
echo '</tr>';
echo '<tr>';
echo '<th>MENU</th>';
echo '<th>PRICE</th>';
echo '</tr>';
while($row=mysqli_fetch_array($d))
{
	echo '<tr>';
	echo '<td>'.$row["MENU"].'</td>';
	echo '<td>'.$row["PRICE"].'</td>';
	echo '</tr>';
}
echo '</table>';

mysqli_close($con);
?>