<html>

<head>
    <meta name="keyworks" content="Haha">
    <title>墾丁三日遊-註冊</title>
    <link rel="icon" href="https://uniform.wingzero.tw/assets/images/badge/twes-442-pingtung-ktps.Array"
        type="image/x-icon">
</head>

<body>
    <div style="text-align:center">
        <h1>註冊</h1>
    </div>
    <table>
        <form action="singupC.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>帳號:</td>
                <td><input type="text" name="uname" required></td>
            </tr>
            <tr>
                <td>密碼:</td>
                <td><input type="password" name="upasswd" required></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="uemail" required></td>
            </tr>
            <tr>
                <td>電話:</td>
                <td><input type="tel" name="tel" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="送出資料"></td>
            </tr>


        </form>
    </table>
</body>



</html>