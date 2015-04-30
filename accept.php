<html>

<body>

<h4>信息管理</h4>
<table border="1">
<tr>
  <th>订单号</th>
  <th>sex</th>
  <th>内容</th>
  <th>ip</th>
  <th>名称</th>
  


</tr>


<?php
$id=$_GET['id'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("luyou", $con);

$result = mysql_query("SELECT * FROM ip where number='{$id}'");

while($row = mysql_fetch_array($result))
  {
  	echo "<tr>";
    echo "<td>".$row['number']."</td>";
    echo "<td>".$row['text']."</td>";
    echo "<td>".$row['ip']."</td>";
    echo "<td>".$row['name']."</td>";
    // echo "<td>".$row['education']."</td>";
    // echo "<td>".$row['assess']."</td>";
    // echo "<td>".$row['tel1']."</td>";
    // echo "<td>".$row['tel2']."</td>";
    // echo "<td>".$row['tel3']."</td>";
    // echo "<td>"."<form action=\"delete.php\" method=\"post\">
    //         <input type=\"text\" name=\"id\" value=\"".$row['id']. "\"style=\"display:none\"/>
    //         <input type=\"submit\" value=\"删除\"/>
    //       </form>"."</td>";
    // echo "<td>"."<a href=\"/user/alter.php?id=".$row['id']."\">修改</a>"."</td>";

  
    echo "</tr>";
  }

?>
</table>



</body>
</html>