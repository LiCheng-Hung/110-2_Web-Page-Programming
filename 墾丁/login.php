<?php
    session_start();
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
        a {
            padding:8px 15px; background:#B2CAF0; border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            text-decoration:none;
            cursor:pointer;
            
            color: #09224B;
            font-family: Inter;
            font-size: 20px;
            font-weight: 700;
            line-height: normal;
        }
        table{
            margin-left:auto; 
            margin-right:auto;

            color: #09224B;
            font-family: Inter;
            font-size: 20px;
            font-weight: 700;
            line-height: normal;
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
        <div style="margin: 250px 25%; background: rgba(255, 255, 255, 0.75);
            padding: 20px; border-radius: 10px; box-shadow: 0px 35px 50px rgba(27, 31, 49, 0.5);">
            <div style="text-align:center; "><h1>登入</h1></div>
            <table style="padding: 10px;">
                <form action="" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>帳號:</td>
                        <td><input type="text" name="iname"></td>
                    </tr>
                    <tr>
                        <td>密碼:</td>
                        <td><input type="password" name="ipasswd"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="登入" style="background-color:#B2CAF0; cursor:pointer;">  <a href="singup.php">註冊</a></td>
                    </tr>
                </form>
            </table>
            <?php
                
                if(isset($_POST["iname"])){
                    if($_POST["iname"]!=null)
                    {
                        $iname=$_POST["iname"];
                        $ipasswd=$_POST["ipasswd"];
                        
                        $link = @mysqli_connect('localhost','root','Suga19930309','php');
                        
                        $SQL="SELECT * FROM kenting WHERE uName='$iname' AND uPasswd='$ipasswd'";

                        $result=mysqli_query($link, $SQL);

                        if(mysqli_num_rows($result)==1){
                            $_SESSION["login"]="Yes";
                            setcookie("UID", $iname, time()+100);
                            header('location:loginC.php');
                        }
                        
                        else{
                            echo "帳號或密碼輸入有誤";
                        }
                    }
                    else{
                        echo "尚未輸入帳密";
                    }            
                }else{
                    
                }
            ?>
            </div>
            </div>
    </body>
</html>