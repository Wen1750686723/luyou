<?php
    $text=$_POST['text'];
    echo $text;
    $server = 'ping '.$text.' -n 10'; 
	ini_set('max_execution_time', '500');  
	$id=$_POST['id'];
	// $server = 'tracert -d baidu.com';    
	$last_line = exec($server, $arr); 
	$arrjson=addslashes(var_export($arr,true)); 
	$arrjson=iconv('GB2312', 'UTF-8', $arrjson);   
	// echo "$last_line"; //最后总结结果      
	// print_r($arr); //PING命令详细数据数组
	if (isset($_ENV["HOSTNAME"])) 
     $MachineName = $_ENV["HOSTNAME"]; 
    else if  (isset($_ENV["COMPUTERNAME"])) 
     $MachineName = $_ENV["COMPUTERNAME"]; 
    else $MachineName = ""; 
    $ip=gethostbyname($MachineName);

	$con = mysql_connect("localhost","root","");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("luyou", $con);

	mysql_query("INSERT INTO `luyou`.`ip` (`id`, `number`, `text`, `ip`, `name`) VALUES (NULL,'{$id}','{$arrjson}','{$ip}','localhost');
		");

	

	mysql_close($con);

?>
