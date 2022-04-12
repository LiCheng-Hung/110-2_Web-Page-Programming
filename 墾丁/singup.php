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

<body class="backgroung">
    <div style="margin: 200px 25%; background: rgba(255, 255, 255, 0.75);
            padding: 20px; border-radius: 10px; box-shadow: 0px 35px 50px rgba(27, 31, 49, 0.5);">
            <div style="text-align:center; "><h1>註冊</h1></div>
            <table style="padding: 10px;">
                <form action="enrollconfirm.php" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>帳號:</td>
                        <td><input type="text" name="iname"></td>
                    </tr>
                    <tr>
                        <td>密碼:</td>
                        <td><input type="password" name="ipasswd"></td>
                    </tr>
                    <tr>
                        <td>角色:</td>
                        <td><input type="radio" name="role" value="admin">管理員<input type="radio" name="role" value="user">使用者</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="註冊" style="background-color:#B2CAF0; cursor:pointer;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>已有帳號，<a href="login.php" style="color:#4F7FC7; text-decoration:none;">返回登入</a></td>
                    </tr>
                </form>
                
            </table>
        </div>
    </div>
</body>

</html>