<?php
require("DBconnect.php");

// $photoname=$_FILES["photo"]["tmp_name"];
// echo $photoname;

// ***取得副檔名***

if($_FILES['photo']['name']){
    $pathpart=pathinfo($_FILES['photo']['name']);
    $extname=$pathpart['extension'];
    // echo $extname.'</br>';
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('請選擇照片');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
}


// ***以上取得副檔名***

//產生新檔案名稱
$finalphoto="Photo_".time().".".$extname;
// 注意!! 為防止兩個人同時上傳，檔名中要加上$uName

// echo $_FILES['photo']['type'];
// echo $finalphoto.'</br>';

// ***上傳檔案***
// if(copy($_FILES['photo']['tmp_name'],$finalphoto)){
//     echo 'success';
// }
// else{
//     echo 'failed';
// }
$now = time();
// 照片路徑加入資料庫
$SQL = "INSERT INTO photo (ppath, pdate) VALUES ('$finalphoto','$now')";

// 上傳檔案
if(copy($_FILES['photo']['tmp_name'],$finalphoto)){
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('照片上傳成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('照片上傳失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
    }
}
else{
    echo "<script type='text/javascript'>";
    echo "alert('照片上傳失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
}

?>