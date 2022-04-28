<style>
    table{
        margin-left:auto; 
        margin-right:auto;
    }
</style>
<?php
require("DBconnect.php");

$SQL="SELECT * FROM photo";

echo "<div style='text-align:center;'><h1>我的相簿</h1></div>";
$count=1;

if($result=mysqli_query($link,$SQL)){
    echo "<table border='1' width=600>";

    while($row=mysqli_fetch_assoc($result)){
        if(($count%4)==1){
            echo "<tr>";
            echo "<td>"."<a href='/W10 上課紀錄/".$row['ppath']."'>"."<img src='/W10 上課紀錄/".$row['ppath']."' width=150>"."</a>";
            echo "</br>";
            echo "<a href='photoupdate.php?pNo=".$row["pNo"]."'>"."更新照片"."</a>"."</td>";
            $count+=1;
        }
        elseif(($count%4)==0)
        {
            echo "<td>"."<a href='/W10 上課紀錄/".$row['ppath']."'>"."<img src='/W10 上課紀錄/".$row['ppath']."' width=150>"."</a>";
            echo "</br>";
            echo "<a href='photoupdate.php?pNo=".$row["pNo"]."'>"."更新照片"."</a>"."</td>";
            echo "</tr>";
            $count+=1;
        }
        else{
            echo "<td>"."<a href='/W10 上課紀錄/".$row['ppath']."'>"."<img src='/W10 上課紀錄/".$row['ppath']."' width=150>"."</a>";
            echo "</br>";
            echo "<a href='photoupdate.php?pNo=".$row["pNo"]."'>"."更新照片"."</a>"."</td>";
            $count+=1;
        }
        
        
        
        
        
    }
    echo "<table>";
}

?>