<!DOCTYPE html>
<html>
<head>
<title>calories</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>

<link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jquery.mobile.datebox.min.css" />
<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.flipbox.min.js"></script>
<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
<script type="text/javascript" src="http://code.jquery.com/mobile/latest/jquery.mobile.js"></script>
<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>

<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="js/config.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
  <div data-role="page" id="main">
    <div data-role="header" data-position="fixed">
      <div data-role="navbar" data-iconpos="top">
        <ul>
          <li data role="page" id="main">
            <a href="main.php" data-icon="home" data-ajax="false">主頁面</a>
          </li>
          <li data role="page" id="calories">
            <a href="calories.php" data-icon="gear" data-ajax="false">食物熱量計算器</a>
          </li>
          <li data role="page" id="weight">
            <a href="#" data-icon="star" data-ajax="false" class="ui-btn-active">孕後體重曲線圖</a>
          </li>
          <li data role="page" id="info">
            <a href="info.php" data-icon="info" data-ajax="false">更多資料</a>
          </li>
        </ul>
      </div>
    </div>
    <div data-role="content">
        <div data-role="fieldcontain">
          <label for="mydate">請輸入日期</label>
          <input name="mydate" id="mydate" type="date" data-role="datebox" data-options='{"mode": "flipbox"}'>
        </div>
        <div data-role="fieldcontain">
            <label for="weight">輸入當日體重</label>
            <input name="weight" id="weight" type="tel">
        </div>
    </div>
  </div>
</body>
</html>