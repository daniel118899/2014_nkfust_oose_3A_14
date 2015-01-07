
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="stylesheet.css">
    <title>人員管理</title>
    
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



<form method="post" action="" onSubmit="return check()">        
<table border=1 >
            <tr><th/><th>ID</th><th>姓名</th><th>性別</th><th>地址</th><th>職位</th><th>薪資</th></tr>
                

<?php
include("mysql_connect.inc.php");

        //將資料庫裡的所有會員資料顯示在畫面上
        $sql = "SELECT * FROM Employee";
        $result = mysql_query($sql);
        
        while($row = mysql_fetch_row($result))
        {
                 
            echo "<tr><td><input type='radio' name='optemployee' value='".$row[0]."' />
            </td><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[6]."</td><td>".$row[2]."</td></tr>";                 
        }

?>
</table>
    <input type="submit" name="delete" value="刪除"/>

<br/><br/>

<table border=1 >
            <tr><th>ID</th><th>姓名</th><th>性別</th><th>地址</th><th>職位</th><th>薪資</th><th>密碼</th></tr>
            <td><input type="text" name="id" size="5"></td>
            <td><input type="text" name="name" size="5"></td>
            <td><input type="text" name="gender" size="5"></td>
            <td><input type="text" name="address" size="10"></td>
            <td><input type="text" name="position" size="5"></td>
            <td><input type="text" name="salary" size="5"></td>
            <td><input type="text" name="password" size="5"></td> </tr>
</table>
    <input type="submit" name="insert" value="新增"/>
    <input type="submit" name="update" value="修改"/>

</form>

<?php

if(isset($_POST["delete"]) && isset($_POST['optemployee'])){
    $id=$_POST['optemployee'];
     $sql = "delete from employee where Employeeid='$id'";

    if(mysql_query($sql)){
        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
    else{
        echo '刪除失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
    
}

if($_POST["id"] != null && $_POST["name"] != null && $_POST["gender"] != null && $_POST["address"] != null && $_POST["position"] != null && $_POST["salary"] != null && $_POST["password"] != null){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $position = $_POST['position'];
        $salary = $_POST['salary'];

    
    if(isset($_POST["insert"])){
        $sql = "insert into Employee (EmployeeId,Name,Salary,Gender,Address,Password,Position) values ('$id','$name','$salary','$gender','$address','$password','$position')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
    }

    if(isset($_POST["update"])){
        $optid = $_POST['optemployee'];
        $sql = "update employee set Gender='$gender',Position='$position',EmployeeId = '$id',Address = '$address',Password = '$password',Salary = '$salary',Name = '$name' where EmployeeId='$optid'";
            if(mysql_query($sql))
            {
                    echo '修改成功!';
                    echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
            }
            else
            {
                    echo '修改失敗!';
                    echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
            }

    }
}
?>





