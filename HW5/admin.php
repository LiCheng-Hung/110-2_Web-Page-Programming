<?php
session_start();
if(isset($_SESSION['login'])){
    if($_SESSION['login']=="Yes"){
        echo "<a href='logout.php'>登出系統</a>";
        echo "<div style='text-align:center;'><h1>Welcome to Admin!</h1></div>";
    }
    else{
        echo "非法進入系統";
        exit();
    }
}
else{
    echo "非法進入系統";
    exit();
}   
?>