<style>
    input {padding:5px 15px; background:#ccc; border:0 none;
        cursor:pointer;
        -webkit-border-radius: 5px;
        border-radius: 5px; }
    table{
        margin-left:auto; 
        margin-right:auto;
    }
</style>
<div style="text-align:center;"><h1>照片上傳</h1></div>
<table>
<form action="photoupload.php" method="post" enctype="multipart/form-data">
<tr><td><input type="file" name="photo" accept="image/*"></td></tr>

<tr><td><input type="submit"></td></tr>
</table>
</form>