<?php

$link = @mysqli_connect('localhost','root','Suga19930309','php');
$uNo=$_GET["uNo"];

$SQL="SELECT * FROM kenting WHERE uNo='$uNo'";

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $uName=$row['uName'];
        $uPasswd=$row['uPasswd'];
        $uRole=$row['uRole'];
    }
}

?>


<html>
<head>
<style>
    input {
            padding:5px 15px; 
            background:#e5e5e5;
            border:0 none;
            cursor:auto;
            border-radius: 5px; 
            box-shadow: 0px 5px 20px rgba(27, 31, 49, 0.25);
            
            color: #09224B;
            font-family: Inter;
            font-size: 20px;
            font-weight: 700;
            line-height: normal;
    }
    table{
        margin-left:auto; 
        margin-right:auto;
    }
    .backgroung{
        background-image:url('https://jobus.tw/wp-content/uploads/2017/06/11956668_l_%E7%BB%93%E6%9E%9C-1-1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
    }
</style>
</head>

<body>
<div style="margin: 200px 25%; background: rgba(255, 255, 255, 0.75);
            padding: 20px; border-radius: 10px; box-shadow: 0px 35px 50px rgba(27, 31, 49, 0.5);">
            <div style="text-align:center; "><h1>使用者更新</h1></div>
            <table style="padding: 10px;">
                <form action="updateconfirm.php" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>使用者ID:</td>
                        <td><?php echo $uNo;?><input type="hidden" name="uNo" value='<?php echo $uNo;?>'></td>
                    </tr>
                    <tr>
                        <td>帳號:</td>
                        <td><input type="text" name="uName"></td>
                    </tr>
                    <tr>
                        <td>密碼:</td>
                        <td><input type="password" name="uPasswd"></td>
                    </tr>
                    <tr>
                        <td>角色:</td>
                        <td><input type="radio" name="uRole" value="admin">管理員<input type="radio" name="uRole" value="user">使用者</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="更新資料" style="background-color:#B2CAF0; cursor:pointer;"></td>
                    </tr>
                </form>
                
            </table>
        </div>
    </div>
</body>

</html>