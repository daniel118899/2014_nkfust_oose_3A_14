<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>
<title>訂單管理</title>
<?php include("logouttable.php"); 
include("mysql_connect.inc.php");
date_default_timezone_set('Asia/Taipei');
?><br/><br/>

	<script>
	    function check(){
	        if(confirm("確認要送出嗎？")==true)   
	            return true;
	        else  
	            return false;
	    }

	</script>

<form method="post" action="" onSubmit="return check()">    
營收查詢：<br/>

開始時間：<input type="date" name = "SDate" value="2014-01-31" max="<?php
echo date('Y-m-d');
?>"><br/>

結束時間：<input type="date" name = "DDate" value="<?php echo date('Y-m-d');?>"
max="<?php
echo date('Y-m-d');?>"
><br>

<input type="submit" name = "revenue" value = "營收查詢"/><br/>
</form>
<?php
if(isset($_POST["revenue"]) ){
	$S = $_POST["SDate"];
	$SY = $S[0].$S[1].$S[2].$S[3];
	$SM = $S[5].$S[6];
	$SD = $S[8].$S[9];
	$Stime = mktime(0,0,0,$SM,$SD,$SY);

	$D = $_POST["DDate"];
	$DY = $D[0].$D[1].$D[2].$D[3];
	$DM = $D[5].$D[6];
	$DD = $D[8].$D[9];
	$Dtime = mktime(0,0,0,$DM,$DD,$DY);


	$totalcost = 0;
	$totalprice = 0;
	$totalrevenue = 0;
	
	if($Dtime - $Stime >= 0 ){
		$sql_count = "SELECT b.Quantity,c.ProductPrice,c.ProductCost from `Order` as a, `OrderList` as b, `Inventory` as c where a.OrderId = b.O_Id and b.P_Id = c.ProductId and a.Date>='$S' and a.Date<='$D'";
		$result = mysql_query($sql_count);
		while($row = mysql_fetch_row($result))
		{
			$totalcost += $row[2]*$row[0];
			$totalprice += $row[1]*$row[0];
		} 
		$totalrevenue = $totalprice-$totalcost;

		echo "<center>".$S."~".$D."<br/>總營收：".$totalprice."元<br/>總成本：".$totalcost."元<br/>總收益：".$totalrevenue."元</center>";

	}
	else{
		echo "日期不正確";
	}


}


?>

<br/><br/><br/>

 

<form method="post" action="" onSubmit="return check()">    
訂單編號：<input type="text" name="orderidfind" />
<input type="submit" name="findlist" value="查詢訂單細目" />

	
<table border=1>

<tr><th>訂單編號</th><th>商品細目</th><th>數量</th></tr>
<?php
	if(isset($_POST["findlist"])){
		$findid = $_POST['orderidfind'];
		$sql_findlist = "SELECT a.O_Id,b.ProductName,a.Quantity  FROM `OrderList` as a , `Inventory` as b WHERE a.O_id = '$findid'and a.P_Id = b.ProductId; ";
        $result = mysql_query($sql_findlist);
        while($row = mysql_fetch_row($result))
        {	
            echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
			
        }
	}
?>
</table>

<table border=1>
<tr><th/><th>訂單編號</th><th>桌號</th><th>時間</th></tr>

<?php

	$sql = "SELECT * FROM `Order` " ;
        $result = mysql_query($sql);
        while($row = mysql_fetch_row($result))
        {	
            echo "<tr><td><input type='radio' name='optorder' value='".$row[0]."' /></td>
            <td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2].
            "</td>";
			
        }

    if(isset($_POST["delete"]) && isset($_POST['optorder'])){
    $id=$_POST['optorder'];


    $sql1 = "SELECT P_Id,Quantity from `OrderList` where O_Id = '$id'" ;
        $result1 = mysql_query($sql1);
        while($row = mysql_fetch_row($result1))
        {	
      
    	$sql_insertback = "UPDATE Inventory set ProductQuantity = ProductQuantity+'$row[1]' where ProductId = '$row[0]'";
    	if(mysql_query($sql_insertback)){
    		$sql_deleteorderlist = "DELETE from OrderList where O_id = '$id'";
    		if(mysql_query($sql_deleteorderlist) ){
	        	echo '刪除明細成功!';
	        	$sql_deleteorder = "DELETE from `Order` where Orderid='$id'";   
				if(mysql_query($sql_deleteorder) ){
			        echo '刪除訂單成功!';
			        echo '<meta http-equiv=REFRESH CONTENT=2;url=order.php>';
			    }
			    else{
			        echo '刪除失敗!';
			        echo '<meta http-equiv=REFRESH CONTENT=2;url=order.php>';
			    }
	   		}
	    	else{
	        	echo '刪除失敗!';
	        	echo '<meta http-equiv=REFRESH CONTENT=2;url=order.php>';
	    	}
    	}
    		
    }

   
       
	}
?>
</table>
<input type="submit" name="delete" value="刪除" />
</from>