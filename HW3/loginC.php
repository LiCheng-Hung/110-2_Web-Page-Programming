<?php
$iname=$_POST["iname"];
$ipasswd=$_POST["ipasswd"];

    if($iname=='a' && $ipasswd=='a')
    {
        header("location:index.php");
    }
    else
    {
        header("location:loginF.php");
    }
?>