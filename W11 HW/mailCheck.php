<?php

require("DBconnect.php");

if($_POST["email"]!=null){
    $email=$_POST["email"];

    $SQL="SELECT * FROM email WHERE eEmail='$email'";
    $result=mysqli_query($link, $SQL);

    if(mysqli_num_rows($result)==1){
        echo "<h3>您已訂閱過</h3>";
        echo "<meta http-equiv='Refresh' content='5; url=mailWrite.php'>";
    }
    else{
        echo "<h3>成功加入訂閱</h3>";
        $iSQL="INSERT INTO email (eEmail) VALUES('$email')";
        if(mysqli_query($link, $iSQL)){
            echo "<script type='text/javascript'>";
            echo "alert('訂閱成功');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='5; url=mailWrite.php'>";
            // header('Location: list.php');
        }
        else{
            echo "<script type='text/javascript'>";
            echo "alert('訂閱失敗');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='5; url=mail.php'>";
            // header('Location: enroll.php');
        }
    }
}
else{
    echo "<script type='text/javascript'>";
    echo "alert('未輸入email');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=mail.php'>";
}


?>