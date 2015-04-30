<?php
$con = mysql_connect("localhost","root","");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("exam", $con);
	
    // $id=$_POST["id"];
	$result=mysql_query("select * from exam_test where subjectid='3'"); 
	$i=0;
	while($row = mysql_fetch_array($result))
	{
	  $sum[$i]=$row;
	  $i++;
	}


	echo json_encode($sum);
	mysql_close($con);
	// echo "chenggong";
// $arr["name"]="sss";
// $arr["di"]="kkk";
// $j_arr=json_encode($arr);
// echo $j_arr;
// echo "sfdsdfsfdsfds";


	

	
?>