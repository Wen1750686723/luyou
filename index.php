<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
    <script src="js/jquery-1.10.1.min.js"></script>
   
  <script type="text/javascript">
    
    $(document).ready(function(){
      var time=date();
      $(document).ajaxStart(function(){
        $("div").text("正在加载");
      });
      $(document).ajaxStop(function(){
        $("div").text("加载完成");
      });
      $("button").click(function(){
      
      $.post("receive.php",
      {
        id:time,
        text:eval(document.getElementById("ss")).value
      },
      function(data,status){
         window.location.href='accept.php?id='+time;
      });
     
       });
       

    });
  function date(){
    var d=new Date();
    var timestamp = d.getTime();
    return timestamp;

  }
  </script>
</head>
<body>
   <input type="text" name="ss" id="ss"/>
   <br/>
   <button>确认</button>
   <br/>
   <div></div>
</body>
</html>