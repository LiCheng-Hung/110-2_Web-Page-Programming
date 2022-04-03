<!--
    1.連線資料庫
    2.SQL
    3.執行SQL
    4.顯示查詢結果
    5.關閉資料庫
-->

<?php
session_start();

if(isset($_COOKIE["UID"]))
{
    $cookieID=$_COOKIE["UID"];
    echo "感謝".$cookieID."回到本系統";
    
}else{
    echo "歡迎初次來本系統";
}
?>

<html>
<head>
<style>
    input {padding:5px 15px; background:#ccc; border:0 none;
        cursor:pointer;
        -webkit-border-radius: 5px;
        border-radius: 5px; }
    table{
        margin-left:auto; 
        margin-right:auto;
    }
</style>
</head>
<body>
<div style="text-align:center;"><h1>登入</h1></div>
    <table>
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
                <td><input type="submit" value="登入"></td>
            </tr>
        </form>
    </table>
    <?php
        $name1="user";
        $passwd1="123";
        $name2="admin";
        $passwd2="admin";
        
        
        if(isset($_POST["iname"])){
            if($_POST["iname"]!=null)
            {
                $iname=$_POST["iname"];
                $ipasswd=$_POST["ipasswd"];
                
                // if($iname==$name1 && $ipasswd==$passwd1){
                //     $_SESSION["login"]="Yes";
                //     setcookie("UID", $iname, time()+100);
                //     header('location:loginC.php');
                // }
                // else if($iname==$name2 && $ipasswd==$passwd2)
                // {
                //     $_SESSION["login"]="Yes";
                //     setcookie("UID", $iname, time()+100);
                //     header('location:loginC.php');
                // }
                $link = @mysqli_connect('localhost','root','Suga19930309','php');
                
                $SQL="SELECT * FROM user WHERE uName='$iname' AND uPasswd='$ipasswd'";

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
</body>

</html>