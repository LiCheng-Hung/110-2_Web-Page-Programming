<?php
$link = @mysqli_connect('localhost','root','Suga19930309','php');// include("DBconnent.php");

$uName=$_POST["iname"];
$uPasswd=$_POST["ipasswd"];
$role=$_POST["role"];

// echo $uName.$uPasswd.$role;

$SQL="INSERT INTO kenting (uName, uPasswd, uRole) VALUES('$uName','$uPasswd','$role')";
if($uName=="" || $uPasswd=="" || $role==""){
    echo "<script type='text/javascript'>";
    echo "alert('註冊失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=singup.php'>";
    // header('Location: enroll.php');
}
else{
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('註冊成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=login.php'>";
        // header('Location: list.php');
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('註冊失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=singup.php'>";
        // header('Location: enroll.php');
    }
}

?>