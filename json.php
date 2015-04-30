<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<script src="js/jquery-1.7.2.min.js"></script>
<title>控制台</title>
  <script type="text/javascript">
    
    $(document).ready(function(){
 //      $.ajax({ 
	// 	type: "POST",
	// 	url: "receiveone.php",
	// 	dataType: "json",
	// 	data: "id=3",
	// 	success: function(data){
			  
	//     for(var p in data){//遍历json对象的每个key/value对,p为key
 //          $("select").append("<option value="+data[p].id+">"+data[p].testname+"</option>");
 //        }	          	
	//   },
	// 	error:function(){
	// 		alert("F");
	// 		return false;
	//   }
	// });
	$.post("receiveone.php",
      {
        id:3,    
      },
      function(data,status){
      for(var p in data){//遍历json对象的每个key/value对,p为key
          $("select").append("<option value="+data[p].id+">"+data[p].testname+"</option>");
        }	 
      },"json");
      
    });
   </script>
</head>
<body>
<input type="text" />
<select name="test">
</select>
<div></div>
</body>
</html>