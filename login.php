<head>
	
	<meta  http-equiv="Content-Type"  Content="text/html; charset=utf-8"/ >
	
	<title>系統登入</title>
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>

<div class="indexhead">第14組<br>餐廳點餐介面系統</div>
<div class="login">
	


<form name="form" method="post" action="">
	帳號(User-ID)：<input type="text" name="id" /> <br>
	密碼(Password)：<input type="password" name="pw" /> <br><br>
	<input type="submit" name="button" value="登入" /><br>

</form>

<span id="datetime">time</span>
<script>
  function setTime(){
     var day="";
      var month="";
      var ampm="";
      var ampmhour="";
      var myweekday="";
      var year="";
   var myHours="";
   var myMinutes="";
   var mySeconds="";
      mydate=new Date();
      myweekday=mydate.getDay();
      mymonth=parseInt(mydate.getMonth()+1)<10?"0"+(mydate.getMonth()+1):mydate.getMonth()+1;
      myday= mydate.getDate();
      myyear= mydate.getYear();
   myHours = mydate.getHours();
      myMinutes = mydate.getMinutes();
      mySeconds = parseInt(mydate.getSeconds())<10?"0"+mydate.getSeconds():mydate.getSeconds();
      year=(myyear > 200) ? myyear : 1900 + myyear;
      if(myweekday == 0)
      weekday=" 星期日 ";
      else if(myweekday == 1)
      weekday=" 星期一 ";
      else if(myweekday == 2)
      weekday=" 星期二 ";
      else if(myweekday == 3)
      weekday=" 星期三 ";
      else if(myweekday == 4)
      weekday=" 星期四 ";
      else if(myweekday == 5)
      weekday=" 星期五 ";
      else if(myweekday == 6)
      weekday=" 星期六 ";
     datetime.innerText=year+"年"+mymonth+"月"+myday+"日 "+myHours+"點:"+myMinutes+"分:"+mySeconds+"秒 "+weekday;
  setTimeout("setTime()",1000);
  }
  setTime();
</script>


<?php
if (isset($_POST['id']) && isset($_POST['pw'])){
	include("mysql_connect.inc.php");
	$id = $_POST['id'];
	$pw = $_POST['pw'];
	$sql = "SELECT * FROM Employee where Employeeid = '$id'";
	$result = mysql_query($sql);
	$row = @mysql_fetch_row($result);

	//判斷帳號與密碼是否為空白
	//以及MySQL資料庫裡是否有這個會員
	if($id != null && $pw != null && $row[0] == $id && $row[5] == $pw)
	{
	        //將帳號寫入session，方便驗證使用者身份
	        //$_SESSION['EmployeeId'] = $id;
	        echo '登入成功!';
	        echo '<meta http-equiv=REFRESH CONTENT=1;url=management.php>';
	}
	else
	{
	        echo '登入失敗!';
	}
}
else{
		echo("請輸入帳號＆密碼");
}
?>
<br>
<h4>組員:</h4>
<h5> 蕭任軒 0124031</h5>
<h5> 劉育男 0124029</h5>
<h5> 張惟智 0124041</h5>
<h5> 曾祥銘 0124045</h5>
<h5> 陳安 0124077</h5>




