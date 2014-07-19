<!DOCTYPE html>
<html>
<head>
<title>WeightCare</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
  <div data-role="page" id="login">
    <div data-role="header">
      <h2>Welcome to WeightCare</h2>
    </div>

    <form name="form" method="post" action="login_chk.php">
    <div data-role="fieldcontain">
        <label for="id">帳號:</label>
        <input type="text" name="id" value="" placeholder="input id" data-mini="true" />
    </div>
    <div data-role="fieldcontain">
        <label for="pw">密碼:</label>
        <input type="password" name="pw" value=""  data-mini="true" />
    </div>
    <div data-role="content" data-type="horizontal" align="right">
      <input type="button" data-inline="true" value='註冊'onclick="location.href='register.php'">
      <input type="submit" data-inline="true" value='登入'>
    </div>
    </form>
  </div>
</body>
</html>
