<html>
<head>
    <meta name="keyworks" content="Haha">
    <title>墾丁三日遊-註冊資料確認</title>
    <link rel="icon" href="https://uniform.wingzero.tw/assets/images/badge/twes-442-pingtung-ktps.Array"
        type="image/x-icon">
</head>
<body>
<?php
$uname=$_POST["uname"];
$upasswd=$_POST["upasswd"];
$uemail=$_POST["uemail"];
$tel=$_POST["tel"];

echo "<h3>確認你的註冊資料是否正確</h3>";
echo "帳號:".$uname."<br/>";
echo "密碼:".$upasswd."<br/>";
echo "E-mail:".$uemail."<br/>";
echo "電話:".$tel."<br/>";
?>

<form action="login.php" method="post" enctype="multipart/form-data">
    <input type="submit" value="正確" >
</form>
<form action="singup.php" method="post" enctype="multipart/form-data">
    <input type="submit" value="返回(有誤)" >
</form>
</body>
</html>