<html>
    <?php
        $iname=$_COOKIE["UID"];
    ?>
<head>
<meta name="keyworks" content="Haha">
<title>墾丁三日遊報名表</title>
<link rel="icon" href="https://uniform.wingzero.tw/assets/images/badge/twes-442-pingtung-ktps.Array" type="image/x-icon">
<style scoped>
    .login{
        position: absolute;
        right: 5%;
        top: 10px;
        padding: 1px 5px;
        background: #09224B;
        border:0 none;
        border-radius: 5px;

        color: #ffffff;
        font-family: Inter;
        font-size: 20px;
        font-weight: 600;
        line-height: normal;
        text-decoration:none;
    }
    .singup{
        position: absolute;
        right: 1%;
        top: 10px;
        padding: 1px 1px;
        border:0 none;

        color: #09224B;
        font-family: Inter;
        font-size: 20px;
        font-weight: 700;
        line-height: normal;
        text-decoration:none;
    }
        
    .header{
        position: absolute;
        width: 100%;
        height:50px;
        left: 0px;
        top: 0px;
        background: #B2CAF0;
;
    }
    .title{
        position: absolute;
        left: 45%;
        top: 5px;
        
        color: #09224B;
        font-family: Inter;
        font-size: 30px;
        font-weight: 700;
        line-height: normal;
    }
    .image{
        border: 5px solid #FFFFFF;
        box-shadow: 0px 4px 4px 5px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
    }
    
    /*  table
    ------------------------------------- */
    table {
    border-collapse: collapse; /* 表格邊框合併 */
    width: 100%; /* 寬度 100% */
    background-color: white; /* 背景白色 */
    }

    table thead th {
    color: #09224B; /* 表頭文字白色 */
    background: #ffffff; /* 表頭背景白色 */
    border-bottom: 2px solid #e5e5e5;
    }

    table td,
    table th {
    text-align: center; /* 文字置中顯示 */
    padding: 10px; /* 添加內距 */
    }

    table td {
    border-right: 1px solid #f1f1f1; /* 表格 td 右邊框顏色 */
    }

    table tr:nth-child(odd) {
    background: #f8f8f8; /* 表格偶數 tr 灰色背景 */
    }
</style>
</head>


<?php
echo "<body bgcolor='#ffffff'>"
?>

<div class="header">
    <b class="title">墾丁三日遊</b>
    <?php
        if($iname){
            echo "<div style='position: absolute;
            right: 1%;
            top: 10px;
            color: #09224B;
            font-family: Inter;
            font-size: 20px;
            font-weight: 700;
            line-height: normal;
            text-decoration:none;'>$iname.歡迎回來</div>";
        }
        else{
            echo "<a href='login.php' class='login'>登入</a>
                <a href='singup.php' class='singup'>註冊</a>";
        }
    ?>
</div>

<?php
    if($iname){
        echo "<p>&nbsp</p>";
        echo "<p>&nbsp</p>";
    }
    else{

    }
?>

<div style="text-align:center; font-family: Inter;
        font-size: 20px;
        font-weight: 700;
        line-height: normal;"><p>三天兩夜用最低成本帶你體驗墾丁<br/>
<strong style="background-color:#FFFFAA">推薦年齡18～28歲</strong><br/>
主要為窮學生族群，無車代步，以及偏好俗又大碗者。為墾丁三日遊基本型。<br/>
</p></div>

<div style="text-align:center;"><p>
<a href="http://uukt.com.tw/attraction/14" target="new">
    <image src="https://img.uukt.com.tw/view/14/1080/20161119105928oYYqF.jpg" width="40%" class="image"></a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="http://uukt.com.tw/attraction/21" target="new">
    <image src="https://img.uukt.com.tw/view/21/1080/201611192216156xiX9.jpg" width="40%" class="image"></a>
</p></div>

<div style="margin: 20px 15%; background-color:#4F7FC7;
        color: #ffffff; 
        font-family: Inter;
        font-size: 30px;
        font-weight: 600;
        line-height: normal;
        text-align: center;">
三日遊行程
</div>




<div style="margin: 20px 20%; border-radius: 10px; border: 2px solid #B2CAF0;">
    <div style="background-color:#B2CAF0;
        border-top-left-radius: 10px; 
        border-top-right-radius: 10px;">
        <div style="color: #09224B; 
        font-family: Inter;
        font-size: 20px;
        font-weight: 600;
        line-height: normal;
        padding: 10px 20px;">第一天</div>
    </div>
    <div style="padding: 10px 20px;">
        <table>
            <thead>
                <tr>
                    <th>時段</th>
                    <th>行程</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>早上</th>
                    <td>由高雄火車站或小港機場到墾丁→ 午餐 (請參考高雄往墾丁的客運)</td>
                </tr>
                <tr>
                    <td>下午</td>
                    <td>小灣戲水→ 青年活動中心→ 情人灘拾貝、觀落日→ 晚餐至恆春覓食</td>
                </tr>
                <tr>
                    <td>晚餐</td>
                    <td>墾丁大街踩街→ 找店預約第二天水上活動→ 小灣觀星→ 回民宿裡睡覺</td>
                </tr>
            </tbody>  
        </table>
    </div>
</div>

<div style="margin: 20px 20%; border-radius: 10px; border: 2px solid #B2CAF0;">
    <div style="background-color:#B2CAF0;
        border-top-left-radius: 10px; 
        border-top-right-radius: 10px;">
        <div style="color: #09224B; 
        font-family: Inter;
        font-size: 20px;
        font-weight: 600;
        line-height: normal;
        padding: 10px 20px;">第二天</div>
    </div>
    <div style="padding: 10px 20px;">
        <table>
            <thead>
                <tr>
                    <th>時段</th>
                    <th>行程</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>早上</th>
                    <td>早餐→ 水上活動 (浮潛、乘坐香蕉船、水上摩托車…等)→ 午餐</td>
                </tr>
                <tr>
                    <td>下午</td>
                    <td>找店承租一天的摩托車(至明天中午)</br>
                        往西半島出發→ 南灣→ 瓊麻館→ 後壁湖碼頭→ 貓鼻頭→ 白砂→ 關山飛來石→ 關山日落</br>
                        → 晚餐至恆春覓食</td>
                </tr>
                <tr>
                    <td>晚餐</td>
                    <td>恆春→ 出火→ 回墾丁大街補踩街→ 鵝鑾鼻燈塔夜遊→ 龍磐觀星→ 回民宿做好夢…</td>
                </tr>
            </tbody>  
        </table>
    </div>
</div>

<div style="margin: 20px 20%; border-radius: 10px; border: 2px solid #B2CAF0;">
    <div style="background-color:#B2CAF0;
        border-top-left-radius: 10px; 
        border-top-right-radius: 10px;">
        <div style="color: #09224B; 
        font-family: Inter;
        font-size: 20px;
        font-weight: 600;
        line-height: normal;
        padding: 10px 20px;">第三天</div>
    </div>
    <div style="padding: 10px 20px;">
        <table>
            <thead>
                <tr>
                    <th>時段</th>
                    <th>行程</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>早上</th>
                    <td>早餐→ 東半島之旅→ 船帆石→ 貝殼砂展示館→ 路過燈塔→ 聯勤→ 龍磐草原→ 風吹砂</br>
                        → 港口吊橋→ 路過出火→ 恆春→ 墾丁</td>
                </tr>
                <tr>
                    <td>下午</td>
                    <td>歸還摩托車→ 午餐 吃過飯，打包行李趕路回家</td>
                </tr>
            </tbody>  
        </table>
    </div>
</div>

</body>
</html>