<html>
<head>
<meta name="keyworks" content="Haha">
<title>墾丁三日遊報名表</title>
<link rel="icon" href="https://uniform.wingzero.tw/assets/images/badge/twes-442-pingtung-ktps.Array" type="image/x-icon">
<style scoped>
    .table{
        border:3px #46A3FF dashed;
        brackground-color:#D2E9FF;
        margin:auto;
        text-align:center;
    }
    .table tr{
        border-width: 1px;
        border-color: black;
        border-style: solid;
        border-collapse:collapse;
    }
    .table th{
        border-width: 1px;
        border-color: black;
        border-style: solid;
        border-collapse:collapse;
    }
    .table td{
        border-width: 1px;
        border-color: black;
        border-style: solid;
        border-collapse:collapse;
    }
    
    .header{
        position: absolute;
        width: 100%;
        height:50px;
        left: 0px;
        top: 0px;
        background-color:#C4E1FF;
    }
    .title{
        
        font-style: normal;
        font-weight: bold;
        font-size: 30px;
        line-height: 50px;
        text-align: center;
    }
    .login{
        position: relative;
        border-radius:10px;
        width:50px;
        height:50%;
        float:right;
        margin: 15px auto;
        background:#0072E3;
        top: 0px;
        right:2%;
                
        font-style: normal;
        font-weight: bold;
        font-size: 15px;
        line-height: 25px;
        text-align: center;
        color:#ffffff;              
    }
    .singup{
        position: relative;
        float:right;
        top: 0px;
        right:1%;
        margin: 15px auto;
        background: #C4E1FF;

        font-style: normal;
        font-weight: bold;
        font-size: 15px;
        line-height: 25px;
        text-align: center;
        color:#004B97;
    }
    
</style>
</head>


<?php
echo "<body bgcolor='#ffffff'>"
?>

<div class="header">
    <div class="title">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp墾丁三日遊
            <form action="singup.php" method="post" enctype="multipart/form-data" class="singup">
                <input type="submit" value="註冊" >
            </form>
            <form action="login.php" method="post" enctype="multipart/form-data" class="singup">
                <input type="submit" value="登入" >
            </form>
        
    </div>
</div>

<div>&nbsp</div>
<div>&nbsp</div>

<div style="text-align:center"><p>三天兩夜用最低成本帶你體驗墾丁<br/>
<strong style="background-color:#FFFFAA">推薦年齡18～28歲</strong><br/>
主要為窮學生族群，無車代步，以及偏好俗又大碗者。為墾丁三日遊基本型。<br/>
</p></div>

<div style="text-align:center"><p>
<a href="http://uukt.com.tw/attraction/14" target="new"><image src="https://img.uukt.com.tw/view/14/1080/20161119105928oYYqF.jpg" width="40%"></a>
<a href="http://uukt.com.tw/attraction/21" target="new"><image src="https://img.uukt.com.tw/view/21/1080/201611192216156xiX9.jpg" width="40%"></a>
</p></div>

<div style="margin:auto; border-radius: 7px; box-sizing: border-box; content: ''; color: #46A3FF; border: 2px solid #46A3FF;">
    <div style="background-color: #46A3FF; color: #ffffff; font-size: 24px; padding: 0.1em 0.4em; font-weight: bold; border-top-left-radius: 5px; border-top-right-radius: 5px; text-align: center;">
    報名表
    </div>
    <div style="text-align:left;background-color:#ffffff;padding:0.1em 0.4em;">
        <table width="100%">
        <tr><td>
        <form action="rinfo.php" method="post" enctype="multipart/form-data">
        <table >
            <tr><td>姓名:</td><td><input type="text" name="uname" required></td></tr>
            <tr><td>Email:</td><td><input type="email" name="uemail" required></td></tr>
            <tr><td>電話:</td><td><input type="tel" name="tel" required></td></tr>
            <tr><td>性別:</td><td><input type="radio" name="gender" value="男" checked>男<input type="radio" name="gender" value="女">女<input type="radio" name="gender" value="other">其他</td></tr>
            <tr><td>餐點:</td><td><input type="checkbox" name="food[]" value="葷食" checked>葷食<input type="checkbox" name="food[]" value="素食(蛋奶素)">素食(蛋奶素)<input type="checkbox" name="food[]" value="其他">其他</td></tr>
            <tr><td>衣服尺寸:</td><td valign="center">
                <select>
                    <option>請選擇你的衣服尺寸</option>
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                    <option>XXL</option>                    
                </select></td></tr>
            <tr><td>衣服顏色:</td><td><input type="color" name="color"></td></tr>
            <tr><td>生日日期:</td><td><input type="date" name="birthday"></td></tr>
            <tr><td>人數:</td><td><input type="number" name="number"></td></tr>
            <tr><td>其他建議</td><td><textarea name="comment" col="50" row="1"></textarea></td></tr>
            <tr><td></td><td><input type="file" name="uphoto"></td></tr>
            <tr><td></td><td><input type="submit" value="送出資料" ></td></tr>
        </table>
        </form>
        </td>
        <td style="text-align:center;">
        
        
        <table class="table" cellpadding="10">
        
        <tr><th></th><th>XS</th><th>S</th><th>M</th><th>L</th><th>XL</th><th>XXL</th></tr>
        <tr><th>衣長</th><td>50</td><td>55</td><td>60</td><td>63</td><td>65</td><td>67</td></tr>
        <tr><th>肩寬</th><td>37</td><td>38</td><td>39</td><td>40</td><td>41</td><td>42</td></tr>
        <tr><th>適合身高</th><td>150</td><td>155</td><td>160</td><td>165</td><td>170</td><td>175</td></tr>
        </table><br/>
        <a href="http://uukt.com.tw/schedular/3-day-tour">墾丁三日遊行程表</a>
        
        </td>
        </tr>
    </div>
</div>

</body>
</html>