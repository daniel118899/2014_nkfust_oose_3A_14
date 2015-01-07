
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="stylesheet.css">
    <title>訂位管理</title>
    
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


</head>



<form method="post" action="" onSubmit="return check()">        
<table border=1 >
            <tr><th/><th>編號</th><th>桌號</th><th>時間</th><th>人數</th></tr>
                

<?php

        $sql = "SELECT * FROM Reservation order by DateTime ";
        $result = mysql_query($sql);
        while($row = mysql_fetch_row($result))
        {   $dd="";
            for($i=0;$i<19;$i++){
                $dd =$dd.$row[2][$i];

            }
            echo "<tr><td><input type='radio' name='optreservation' value='".$row[0]."' />
            </td><td>".$row[0]."</td><td>".$row[1]."</td><td>".$dd."</td><td>".$row[3]."</td></tr>";                 
        }

?>
</table>
    <input type="submit" name="delete" value="刪除"/>

<br/><br/>

<table border=1 >
            <tr><th>桌號</th><th>時間</th><th>人數</th></tr>
            <td><input type="text" name="tablenum" size="5"></td>
            <td><input type="text" name="time" size="10"</td>
            <td><input type="text" name="people" size="10"></td>
           
</table>
    <input type="submit" name="insert" value="新增"/>

</form>

<?php

if(isset($_POST["delete"]) && isset($_POST['optreservation'])){
    $id=$_POST['optreservation'];
     $sql = "DELETE from Reservation where ReservationId='$id'";

    if(mysql_query($sql)){
        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=reservation.php>';
    }
    else{
        echo '刪除失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=reservation.php>';
    }
    
}

if($_POST["tablenum"] != null && $_POST["time"] != null && $_POST["people"]!=null){
        $tablenum = $_POST['tablenum'];
        $time = $_POST['time'];
        $people = $_POST['people'];

    if(isset($_POST["insert"])){
        $sql = "INSERT into Reservation (TableNum,DateTime,People) values ('$tablenum','$time','$people')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=reservation.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=reservation.php>';
        }
    }


}
?>





