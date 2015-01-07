
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>系統登入</title>
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>

<div class="indexhead">第14組<br>餐廳管理系統</div>
<div class="login">



<form name="form" method="post" action="">
	確認碼：<input type="password" name="pw" /> <br><br>
	<input type="submit" name="button" value="登入" />
</form>

<?php
if (isset($_POST['pw'])){
	
	if($_POST['pw']=='1234')
	{
	        echo $pw;
	        echo '登入成功!';
	        echo '<meta http-equiv=REFRESH CONTENT=1;url=menu1.php>';
	}
	else
	{
	        echo '登入失敗!';
	}
}
else{
		echo("確認碼");
}
?>

</div>

<br>





