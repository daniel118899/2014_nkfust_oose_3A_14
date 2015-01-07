<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="stylesheet.css">
	<title>產品列表</title>

	<?php include("logouttable.php"); ?><br/><br/>

	<script>
	    function check(){
	        if(confirm("確認要送出嗎？")==true)   
	            return true;
	        else  
	            return false;
	    }

	</script>

</head>
<body >
<form method="post" action="" onSubmit="return check()">	
<table border=1>
	<tr><th/><th>ID</th><th>產品名稱</th><th>庫存量</th><th>售價</th><th>成本</th><th>進貨商</th></tr>
<?php
	include("mysql_connect.inc.php");
	 $sql = "SELECT * FROM Inventory";
        $result = mysql_query($sql);
        
        while($row = mysql_fetch_row($result))
        {	
        		echo("<tr><td><input type='radio' name='optproduct' value='".$row[0]."' />");
                echo "<td>".$row[0]."</td><td>".$row[1]."</td>" ;
                echo "<td>".$row[2]."</td><td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td><td>".$row[5]."</td></tr>";

        }
?>

</table>

<input type="submit" name="delete" value="刪除"/>

<br/><br/>
    
<table border='1'>
	<tr ><th>ID</th><th>產品名稱</th><th>庫存量</th><th>售價</th><th>成本</th><th>進貨商</th></tr>
	<tr>
		<td><input type="text" name="id" size="5"></td>
		<td><input type="text" name="name" size="5"></td>
		<td><input type="text" name="quantity" size="5"></td>
		<td><input type="text" name="price" size="5"></td>
		<td><input type="text" name="cost" size="5"></td>
		<td><input type="text" name="company" size="5"></td>
	</tr>		

</table>

<input type="submit" name="insert" value="新增"/>
<input type="submit" name="update" value="修改"/>

</form>
 
<?php

if(isset($_POST["delete"]) && isset($_POST['optproduct'])){
    $id=$_POST['optproduct'];
     $sql = "delete from Inventory where Productid='$id'";

    if(mysql_query($sql)){
        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=productlist.php>';
    }
    else{
        echo '刪除失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=productlist.php>';
    }
    
}

if($_POST["id"] != null && $_POST["name"] != null && $_POST["quantity"] != null && $_POST["price"] != null && $_POST["cost"] != null && $_POST["company"] != null){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $cost = $_POST['cost'];
        $company = $_POST['company'];
        

    
    if(isset($_POST["insert"])){
        $sql = "insert into Inventory (ProductId,ProductName,ProductQuantity,ProductPrice,ProductCost,Company) values ('$id','$name','$quantity','$price','$cost','$company')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=productlist.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=productlist.php>';
        }
    }

    if(isset($_POST["update"]) && isset($_POST['optproduct'])){
    	$optid = $_POST['optproduct'];
        $sql = "update Inventory set ProductName='$name',ProductId ='$id',ProductQuantity = '$quantity',ProductPrice= '$price',ProductCost = '$cost',Company ='$company' where ProductId='$optid'";
            if(mysql_query($sql))
            {
                    echo '修改成功!';
                    echo '<meta http-equiv=REFRESH CONTENT=2;url=productlist.php>';
            }
            else
            {
                    echo '修改失敗!';
                    echo '<meta http-equiv=REFRESH CONTENT=2;url=productlist.php>';
            }

    }
}
?>


</body>


</html>




