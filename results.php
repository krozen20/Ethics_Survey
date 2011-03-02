<?php 
$name = $_POST["name"];
$R=0;
$N=0;

$M=0;
$P=0;

$O=0;
$S=0;

$F=0;
$I=0;

if($_REQUEST["q1"]==0)
{
$_REQUEST["q1"]=$R++;
}
elseif($_REQUEST["q1"]==1)
{
$_REQUEST["q1"]=$N++;
}

if($_REQUEST["q2"]==0)
{
$_REQUEST["q2"]=$M++;
}
elseif($_REQUEST["q2"]==1)
{
$_REQUEST["q2"]=$P++;
}

if($_REQUEST["q3"]==0)
{
$_REQUEST["q3"]=$F++;
}
elseif($_REQUEST["q3"]==1)
{
$_REQUEST["q3"]=$I++;
}

if($_REQUEST["q4"]==0)
{
$_REQUEST["q4"]=$O++;
}
elseif($_REQUEST["q4"]==1)
{
$_REQUEST["q4"]=$S++;
}

if($_REQUEST["q5"]==0)
{
$_REQUEST["q5"]=$R++;
}
elseif($_REQUEST["q5"]==1)
{
$_REQUEST["q5"]=$N++;
}

if($_REQUEST["q6"]==0)
{
$_REQUEST["q6"]=$M++;
$_REQUEST["q6"]=$O++;
}
elseif($_REQUEST["q6"]==1)
{
$_REQUEST["q6"]=$P++;
$_REQUEST["q6"]=$S++;
}

if($_REQUEST["q7"]==0)
{
$_REQUEST["q7"]=$O++;
}
elseif($_REQUEST["q7"]==1)
{
$_REQUEST["q7"]=$S++;
}

if($_REQUEST["q8"]==0)
{
$_REQUEST["q8"]=$F++;
}
elseif($_REQUEST["q8"]==1)
{
$_REQUEST["q8"]=$I++;
}

if($_REQUEST["q9"]==0)
{
$_REQUEST["q9"]=$F++;
$_REQUEST["q9"]=$M++;
}
elseif($_REQUEST["q9"]==1)
{
$_REQUEST["q9"]=$I++;
$_REQUEST["q9"]=$P++;
$_REQUEST["q9"]=$S++;
}

if($_REQUEST["q10"]==0)
{
$_REQUEST["q10"]=$F++;
$_REQUEST["q10"]=$O++;
}
elseif($_REQUEST["q10"]==1)
{
$_REQUEST["q10"]=$I++;
$_REQUEST["q10"]=$P++;
$_REQUEST["q10"]=$S++;
}

if($_REQUEST["q11"]==0)
{
$_REQUEST["q11"]=$O++;
}
elseif($_REQUEST["q11"]==1)
{
$_REQUEST["q11"]=$M++;
}

if($_REQUEST["q12"]==0)
{
$_REQUEST["q12"]=$M++;
$_REQUEST["q12"]=$F++;
}
elseif($_REQUEST["q12"]==1)
{
$_REQUEST["q12"]=$P++;
$_REQUEST["q12"]=$O++;
$_REQUEST["q12"]=$I++;
}

if($_REQUEST["q13"]==0)
{
$_REQUEST["q13"]=$M++;
$_REQUEST["q13"]=$F++;
}
elseif($_REQUEST["q13"]==1)
{
$_REQUEST["q13"]=$P++;
$_REQUEST["q13"]=$I++;
}

if($_REQUEST["q14"]==0)
{
$_REQUEST["q14"]=$M++;
}
elseif($_REQUEST["q14"]==1)
{
$_REQUEST["q14"]=$P++;
$_REQUEST["q14"]=$S++;
}

if($_REQUEST["q15"]==0)
{
$_REQUEST["q15"]=$M++;
$_REQUEST["q15"]=$O++;
}
elseif($_REQUEST["q15"]==1)
{
$_REQUEST["q15"]=$P++;
$_REQUEST["q15"]=$S++;
}

if($_REQUEST["q16"]==0)
{
$_REQUEST["q16"]=$O++;
}
elseif($_REQUEST["q16"]==1)
{
$_REQUEST["q16"]=$P++;
}

if($_REQUEST["q17"]==0)
{
$_REQUEST["q17"]=$M++;
$_REQUEST["q17"]=$O++;
}
elseif($_REQUEST["q17"]==1)
{
$_REQUEST["q17"]=$S++;
}

if($_REQUEST["q18"]==0)
{
$_REQUEST["q18"]=$F++;
$_REQUEST["q18"]=$R++;
}
elseif($_REQUEST["q18"]==1)
{
$_REQUEST["q18"]=$N++;
$_REQUEST["q18"]=$I++;
}

if($_REQUEST["q19"]==0)
{
$_REQUEST["q19"]=$M++;
$_REQUEST["q19"]=$I++;
}
elseif($_REQUEST["q19"]==1)
{
$_REQUEST["q19"]=$P++;
$_REQUEST["q19"]=$F++;
$_REQUEST["q19"]=$S++;
}

if($_REQUEST["q20"]==0)
{
$_REQUEST["q20"]=$P++;
$_REQUEST["q20"]=$F++;
$_REQUEST["q20"]=$S++;
}
elseif($_REQUEST["q20"]==1)
{
$_REQUEST["q20"]=$I++;
$_REQUEST["q20"]=$O++;
}

if($_REQUEST["q21"]==0)
{
$_REQUEST["q21"]=$M++;
$_REQUEST["q21"]=$O++;
}
elseif($_REQUEST["q21"]==1)
{
$_REQUEST["q21"]=$I++;
$_REQUEST["q21"]=$P++;
$_REQUEST["q21"]=$S++;
}

if($_REQUEST["q22"]==0)
{
$_REQUEST["q22"]=$S++;
$_REQUEST["q22"]=$F++;
}
elseif($_REQUEST["q22"]==1)
{
$_REQUEST["q22"]=$M++;
$_REQUEST["q22"]=$O++;
}

if($_REQUEST["q23"]==0)
{
$_REQUEST["q23"]=$S++;
$_REQUEST["q23"]=$P++;
}
elseif($_REQUEST["q23"]==1)
{
$_REQUEST["q23"]=$M++;
$_REQUEST["q23"]=$O++;
}

if($_REQUEST["q24"]==0)
{
$_REQUEST["q24"]=$F++;
}
elseif($_REQUEST["q24"]==1)
{
$_REQUEST["q24"]=$I++;
}

if($_REQUEST["q25"]==0)
{
$_REQUEST["q25"]=$P++;
}
elseif($_REQUEST["q25"]==1)
{
$_REQUEST["q25"]=$M++;
}

if($_REQUEST["q26"]==0)
{
$_REQUEST["q26"]=$O++;
}
elseif($_REQUEST["q26"]==1)
{
$_REQUEST["q26"]=$S++;
}

if($_REQUEST["q27"]==0)
{
$_REQUEST["q27"]=$M++;
}
elseif($_REQUEST["q27"]==1)
{
$_REQUEST["q27"]=$P++;
}

if($_REQUEST["q28"]==0)
{
$_REQUEST["q28"]=$O++;
}
elseif($_REQUEST["q28"]==1)
{
$_REQUEST["q28"]=$S++;
}

if($_REQUEST["q29"]==0)
{
$_REQUEST["q29"]=$O++;
$_REQUEST["q29"]=$M++;
}
elseif($_REQUEST["q29"]==1)
{
$_REQUEST["q29"]=$S++;
$_REQUEST["q29"]=$P++;
}

if($_REQUEST["q30"]==0)
{
$_REQUEST["q30"]=$F++;
}
elseif($_REQUEST["q30"]==1)
{
$_REQUEST["q30"]=$I++;
}

if($_REQUEST["q31"]==0)
{
$_REQUEST["q31"]=$N++;
}
elseif($_REQUEST["q31"]==1)
{
$_REQUEST["q31"]=$R++;
}

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
			$_counter = $row["counter"]+1;
	 }
	 echo "<center><p><h1>ETHICAL CHOICES MAPPING INSTRUMENT </h1>
<h4>by Argel Cruz and extended by Albert Edlin Tan</h4></p></center>";
echo "<b><center><h1><font color=\"#FF0000\">". $name ."</font></h1></center></b>";
if($N > $R)
{
echo "<h1>Your Style of Choosing is Intuitive rather than Rational</h1>";
	$_a1++;
}
else
{
echo "<h1>Your Style of Choosing is Rational rather than Intuitive</h1>";
	$_a2++;
	
}

if($O > $S)
{
echo "<h1>Your Orientation is centered to other people rather than to yourself</h1>";
	$_b1++;
}
else
{
echo "<h1>Your Orientation is centered to yourself rather than to other people</h1>";
	$_b2++;
}

if($M > $P)
{
echo "<h1>Your Philosophy is Morality</h1>";
	$_c1++;
}
else
{
echo "<h1>Your Philosophy is Pragmatic</h1>";
	$_c2++;
}

if($F > $I)
{
echo "<h1>Your Attitude to Rules is as a Follower instead of an Innovator</h1>";
	$_d1++;
}
else
{
echo "<h1>Your Attitude to Rules is as an Innovator rather than a Follower</h1>";
	$_d2++;
}

	
	mysql_query("update result set a1=" . $_a1 . ",a2=" . $_a2 . ",b1=" . $_b1 . ",b2=" . $_b2 . ",c1=" . $_c1 . ",c2=" . $_c2 . ",d1=" . $_d1 . ",d2=" . $_d2 . ", counter =" . $_counter . " Where ResultID = 1");
	//mysql_query("update result set a1,a2,b1,b2,c1,c2,d1,d2,name) values($_a1,$_a2,$_b1,$_b2,$_c1,$_c2,$_d1,$_d2,$name)");
	
	mysql_close($connect);
	echo "Original code by: Argel Cruz, Licensed under the Common Public Attribution License; Extended by Albert Edlin Tan";
?>