<?php
require("DBconnect.php");
$pNo=$_GET["pNo"];

$SQL="SELECT * FROM photo WHERE pNo='$pNo'";

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $ppath=$row['ppath'];
        $pdate=$row['pdate'];
    }
}
?>

<h1>照片更新</h1>
    <table>
        <form action="updateconfirm.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>照片ID:</td>
                <td><?php echo $pNo;?><input type="hidden" name="pNo" value='<?php echo $pNo;?>'></td>
            </tr>
            <tr>
                <td>重新選擇照片:</td>
                <td><input type="file" name="photo" accept="image/*"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="更新照片"></td>
            </tr>
        </form>
    </table>