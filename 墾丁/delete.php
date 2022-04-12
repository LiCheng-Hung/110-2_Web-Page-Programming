<?php

$link = @mysqli_connect('localhost','root','Suga19930309','php');

$uNo=$_GET["uNo"];
echo $uNo;
$SQL="DELETE FROM kenting WHERE uNo='$uNo'";


if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    // header('Location: list.php');
}
else{
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
    // header('Location: enroll.php');
}

?>