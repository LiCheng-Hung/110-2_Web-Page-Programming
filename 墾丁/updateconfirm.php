<?php

$link = @mysqli_connect('localhost','root','Suga19930309','php');

$uNo=$_POST["uNo"];
$uName=$_POST["uName"];
$uPasswd=$_POST["uPasswd"];
$uRole=$_POST["uRole"];


$SQL="UPDATE kenting SET uName='$uName', uPasswd='$uPasswd', uRole='$uRole' WHERE uNo='$uNo'";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('更新成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    // header('Location: list.php');
}
else{
    echo "<script type='text/javascript'>";
    echo "alert('更新失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    // header('Location: enroll.php');
}

?>