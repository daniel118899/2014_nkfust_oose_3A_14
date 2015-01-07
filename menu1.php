<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>點餐系統</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
	
	<?php
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


<table border=1>
    <tr>
        <td><a href="logout.php">登出</a></td>
    </tr>
</table>
</head>

<body >
	

<form name="form" method="post" action="" onSubmit="return check()">
	<p>桌號：
	<input type="text" name="tablenum" size = "5"> <br/></p>
<table border=1>
	<tr><th>產品名稱</th><th>售價</th><th>數量</th></tr>
<?php
$itemcount = 0;
$itemid = array();
	include("mysql_connect.inc.php");
	 $sql = "SELECT * FROM Inventory";
        $result = mysql_query($sql);

        while($row = mysql_fetch_row($result))
        {	
        	$itemid[$itemcount] = $row[0];
            echo "<tr><td>".$row[1]."</td><td>".$row[3]."</td>" ;
            echo "<td><input type='text' value='0' name='$row[0]' size='3'></td></tr>";
            $itemcount++;
        }

?>

</table><br>

	<input type="submit" name="makeorder" value="點餐" />
	
</form>

<?php


	if(isset($_POST["makeorder"])){
		
		$tablen = $_POST['tablenum'];

		$insertnum = 0; //明細個數計算
		$insertnumcheck = 0; //確認成功新增的明細個數
		$newQuentity = array(); //記錄更新後的庫存

		$sql0 = "SELECT MAX(OrderId) FROM  `Order`";
		$result = mysql_query($sql0);
		$maxid =mysql_fetch_row($result);
		$insertorderid = $maxid[0]+1;
		$orderdate = date('Y-m-d');
		$sql1 = "INSERT INTO `Order` (`OrderId`, `TableNum`,`Date`) VALUES ('$insertorderid', '$tablen','$orderdate')";
		
		if(mysql_query($sql1))       
            echo '訂單新增成功!<br/>';

        else       
            echo '新增失敗!<br/>';

		for($i =0; $i < $itemcount; $i++){	//每個商品檢查一次		
			$ProductId = $itemid[$i];
			$InsertQuantity = $_POST["$ProductId"];

			//取出庫存資料
			
			


			if($InsertQuantity > 0){//確認有填寫的選項
				$sql_checkq = "SELECT ProductQuantity FROM Inventory Where ProductId = '$ProductId'";
				$result_checkq = mysql_query($sql_checkq);
				$checkq = mysql_fetch_row($result_checkq);
				$newQuentity[$ProductId] = $checkq[0] - $InsertQuantity;

				$insertnum ++;
				if($InsertQuantity <= $checkq[0]){ //需求>庫存
					
					$sql2 = "INSERT INTO `OrderList` (`O_Id`, `P_Id`, `Quantity`) VALUES ('$insertorderid', '$ProductId','$InsertQuantity')";				
					$sql_delquantity = "UPDATE `Inventory` set ProductQuantity ='$newQuentity[$ProductId]' where ProductId = '$ProductId'";
					if(mysql_query($sql2) && mysql_query($sql_delquantity)) 
						$insertnumcheck ++;
	            		//echo '訂單明細新增成功!';
	        		else       
	            		echo '訂單明細新增失敗!<br/>';          	

				}
				else{
					$sql_sort = "SELECT ProductName FROM Inventory Where ProductId = '$ProductId'";
					$result_sort = mysql_query($sql_sort);
					$sortq = mysql_fetch_row($result_sort);
					echo $sortq[0]."庫存不足<br/>";
				}	 
			
			}	
					
		}
		
		if($insertnum == $insertnumcheck)
				echo "明細新增成功<br/>";
		


	}
		
	
	
	

?>



