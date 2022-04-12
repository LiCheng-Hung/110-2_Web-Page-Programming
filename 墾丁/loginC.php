<?php
$iname=$_COOKIE["UID"];
$admin="admin";
$link = @mysqli_connect('localhost','root','Suga19930309','php');
$SQL="SELECT * FROM kenting WHERE uName='$iname'";
$result=mysqli_query($link, $SQL);
$row=mysqli_fetch_assoc($result);
if($row["uRole"]==$admin)
{
    header("location:admin.php");
}
else
{
    header("location:index.php");
}
?>


<!--
    HW5作業:
    1.連資料庫判斷帳密對不對
    2.用資料庫裡面的內容判斷登入者是管理員還是使用者
-->