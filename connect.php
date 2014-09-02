<?php session_start(); 
include("db_conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>MummyCare</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script src="js/custom.js"></script>
</head>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
@$id = $_POST['id'];
@$pw = $_POST['pw'];

//搜尋資料庫資料
$sql = "SELECT * FROM user where id = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = @$id;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=main.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}
?>