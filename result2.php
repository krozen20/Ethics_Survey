<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Results</title>
</head>
<?php
$connect =  mysql_connect("db2770.perfora.net","dbo355861669","asdfghjk");
	$connect =  mysql_connect("db2770.perfora.net","dbo355861669","asdfghjk");
	if(!$connect)
	{
		die("Could not connect to database: " . mysql_error());
	}
		
	mysql_select_db("db355861669",$connect);
	$result = mysql_query("SELECT * FROM result");
	while($row = mysql_fetch_array($result))
 	 {
 		 	$_a1 = $row["a1"];
			$_a2 = $row["a2"];
			$_b1 = $row["b1"];
			$_b2 = $row["b2"];
			$_c1 = $row["c1"];
			$_c2 = $row["c2"];
			$_d1 = $row["d1"];
			$_d2 = $row["d2"];
			$_counter = $row["counter"];
	 }
	mysql_close($connect);
	
	Echo "Number of people who have taken the survey(&nbsp;&nbsp;&nbsp;<font color=\"#FF0000\">" . $_counter . "</font>&nbsp;&nbsp;&nbsp;)";
	Echo "Results of survey";
	Echo "<table border = 1>
	<tr>
	<td>Your Style of Choosing is Intuitive rather than Rational</td>
	<td> &nbsp;&nbsp;&nbsp;".$_a1 . "</td>
	</tr>
	
	<tr>
	<td>Your Style of Choosing is Rational rather than Intuitive</td>
	<td>&nbsp;&nbsp;&nbsp;".$_a2."</td>
	</tr>
	
	<tr bordercolor=\"#000099\">
	<td>Your Orientation is centered to other people rather than to yourself</td>
	<td>&nbsp;&nbsp;&nbsp;".$_b1."</td>
	</tr>
	
	<tr>
	<td>Your Orientation is centered to yourself rather than to other people</td>
	<td>&nbsp;&nbsp;&nbsp;".$_b2."</td>
	</tr>
	
	<tr>
	<td>Your Philosophy is Morality</td>
	<td>&nbsp;&nbsp;&nbsp;".$_c1."</td>
	</tr>
	
		<tr>
	<td>Your Philosophy is Pragmatic</td>
	<td>&nbsp;&nbsp;&nbsp;".$_c2."</td>
	</tr>
	
		<tr>
	<td>Your Attitude to Rules is as a Follower instead of an Innovator</td>
	<td>&nbsp;&nbsp;&nbsp;".$_d1."</td>
	</tr>
	
		<tr>
	<td>Your Attitude to Rules is as an Innovator rather than a Follower</td>
	<td>&nbsp;&nbsp;&nbsp;".$_d2."</td>
	</tr>
	
	</table>";
	
$num = $_a1/($_a1+$_a2);
$num = round(($num * 100));
echo "<p>The finding shows that $num% of respondents are intuitive when choosing rather than rational.</p>";
$num = $_a2/($_a1+$_a2);
$num = round(($num * 100));
echo "<p>The finding shows that $num% of respondents are rational when choosing rather than intuitive.</p>";
$num = $_b1/($_b1+$_b2);
$num = round(($num * 100));
print "<p>The finding shows that $num% of respondents are unselfish.</p>";
$num = $_b2/($_b1+$_b2);
$num = round(($num * 100));
print "<p>The finding shows that $num% of respondents are self-centered.</p>";
$num = $_c1/($_c1+$_c2);
$num = round(($num * 100));
print "<p>The finding shows that $num% of respondents have a philosophy of morality.</p>";
$num = $_c2/($_c1+$_c2);
$num = round(($num * 100));
print "<p>The finding shows that $num% of respondents have a philosophy of pragmatic.</p>";
$num = $_d1/($_d1+$_d2);
$num = round(($num * 100));
print "<p>The finding shows that $num% of respondents are followers.</p>";
$num = $_d2/($_d1+$_d2);
$num = round(($num * 100));
print "<p>The finding shows that $num% of respondents are innovators.</p>";

?>
<body>
</body>
</html>