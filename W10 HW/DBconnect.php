<?php
$link = @mysqli_connect(
    'localhost', // MySQL主機名稱
    'root', // 使用者名稱
    'Suga19930309', // 密碼
    'php'); // 預設使用的資料庫名稱


    // $dbname="php";
    // if (!mysqli_select_db($link, $dbname)){
    //     die("無法開啟 $dbname 資料庫!<br/>");
    // }else{
    //     echo "資料庫: $dbname 開啟成功!<br/>"
    // }
    
//    $SQL="SELECT * FROM user";

//    if($result=mysqli_query($link,$SQL)){
//        echo "<table border='1'>";
//        echo "<tr><td>uNo</td><td>uName</td><td>uPasswd</td><td>uRole</td></tr>";
//        while($row=mysqli_fetch_assoc($result)){
//            echo "<tr>";
//            echo "<td>".$row["uNo"]."</td><td>".$row["uName"]."</td><td>".$row["uPasswd"]."</td><td>".$row["uRole"]."</td>";
//            echo "</tr>";
//        }
//        echo "<table>";
//    }

?>