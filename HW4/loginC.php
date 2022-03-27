<?php
$iname=$_COOKIE["UID"];
$name2="admin";

if($iname==$name2)
{
    header("location:admin.php");
}
else
{
    header("location:register.php");
}
?>