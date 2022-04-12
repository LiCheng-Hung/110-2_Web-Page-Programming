<?php
session_start();
$iname=$_COOKIE["UID"];
if(isset($_SESSION['login'])){
    if($_SESSION['login']=="Yes"){
        echo "<a href='logout.php' style='position: absolute;
        right: 5%;
        top: 10px;
        padding: 1px 5px;
        background: #09224B;
        border:0 none;
        border-radius: 5px;

        color: #ffffff;
        font-family: Inter;
        font-size: 20px;
        font-weight: 600;
        line-height: normal;
        text-decoration:none;'>登出系統</a>";
        echo "<div style='text-align:center;'><h1>Welcome $iname to Admin!</h1></div>";
    }
    else{
        echo "<div style='text-align:center;'><h1>非法進入系統</h1></div>";
        exit();
    }
}
else{
    echo "<div style='text-align:center;'><h1>非法進入系統</h1></div>";
    exit();
}   
?>

<html>
<head>
    <style scoped>
        .login{
            position: absolute;
            right: 5%;
            top: 10px;
            padding: 1px 5px;
            background: #09224B;
            border:0 none;
            border-radius: 5px;

            color: #ffffff;
            font-family: Inter;
            font-size: 20px;
            font-weight: 600;
            line-height: normal;
            text-decoration:none;
        }
        .singup{
            position: absolute;
            right: 1%;
            top: 10px;
            padding: 1px 1px;
            border:0 none;

            color: #09224B;
            font-family: Inter;
            font-size: 20px;
            font-weight: 700;
            line-height: normal;
            text-decoration:none;
        }
            
        .header{
            position: absolute;
            width: 100%;
            height:50px;
            left: 0px;
            top: 0px;
            background: #B2CAF0;
    ;
        }
        .title{
            position: absolute;
            left: 45%;
            top: 5px;
            
            color: #09224B;
            font-family: Inter;
            font-size: 30px;
            font-weight: 700;
            line-height: normal;
        }
        .image{
            border: 5px solid #FFFFFF;
            box-shadow: 0px 4px 4px 5px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
        }
        
        /*  table
        ------------------------------------- */
        table {
        border-collapse: collapse; /* 表格邊框合併 */
        width: 100%; /* 寬度 100% */
        background-color: white; /* 背景白色 */
        }

        table thead th {
        color: #09224B; /* 表頭文字白色 */
        background: #ffffff; /* 表頭背景白色 */
        border-bottom: 2px solid #e5e5e5;
        }

        table td,
        table th {
        text-align: center; /* 文字置中顯示 */
        padding: 10px; /* 添加內距 */
        }

        table td {
        border-right: 1px solid #f1f1f1; /* 表格 td 右邊框顏色 */
        }

        table tr:nth-child(odd) {
        background: #f8f8f8; /* 表格偶數 tr 灰色背景 */
        }
    </style>
</head>
<?php

$link = @mysqli_connect('localhost','root','Suga19930309','php');
$SQL="SELECT * FROM kenting";

echo "<div style='margin: 20px 20%; border-radius: 10px; border: 2px solid #B2CAF0;'>";
    echo "<div style='background-color:#B2CAF0;
            border-top-left-radius: 10px; 
            border-top-right-radius: 10px;'>
            <div style='color: #09224B; 
            font-family: Inter;
            font-size: 20px;
            font-weight: 600;
            line-height: normal;
            padding: 10px 20px;'>使用者列表</div></div>";
    echo "<div style='padding: 10px 20px;'>";
if($result=mysqli_query($link,$SQL)){
    
    echo "<table>";
    echo "<thead>
            <tr>
                <th>uNo</th>
                <th>uName</th>
                <th>uPasswd</th>
                <th>uRole</th>
                <th>刪除</th>
                <th>修改</th>
            </tr>
        </thead>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["uNo"]."</td><td>".$row["uName"]."</td><td>".$row["uPasswd"]."</td><td>".$row["uRole"]."</td><td><a href='delete.php?uNo=".$row["uNo"]."'>刪除</a></td><td><a href='update.php?uNo=".$row["uNo"]."'>修改</a></td>";
        echo "</tr>";
    }
    echo "<table>";
}
echo "</div>";
echo "</div>";
?>
</html>