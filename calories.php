<!DOCTYPE html>
<html>
<head>
<title>calories</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="js/config.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
  <div data-role="page" id="calories">
    <div data-role="header" data-position="fixed">
      <div data-role="navbar" data-iconpos="top">
        <ul>
          <li data role="page" id="main">
            <a href="main.php" data-icon="home" data-ajax="false">主頁面</a>
          </li>
          
          <li data role="page" id="colories">
            <a href="calories.php" data-icon="gear" data-ajax="false">食物熱量計算器</a>
          </li>

          <li data role="page" id="weight">
            <a href="weight.php" data-icon="star" data-ajax="false">孕後體重曲線圖</a>
          </li>
          <li data role="page" id="info">
            <a href="info.php" data-icon="info" data-ajax="false">更多資料</a>
          </li>
        </ul>
      </div>
    </div>
  <div data-role="content">
	<ul data-role="listview">
		<li>
			<a href="#record">
				<h3>每日飲食紀錄</h3>
			</a>
		</li>
		<li>
			<a href="#classify">
				<h3>飲食紅綠燈</h3>
			</a>
		</li>
		
	</ul>
  </div>
  </div>
  <div data-role="page" id="record">
    <div data-role="header" data-position="fixed">
      <div data-role="navbar" data-iconpos="top">
        <ul>
          <li data role="page" id="main">
            <a href="main.php" data-icon="home" data-ajax="false">主頁面</a>
          </li>
          <li data role="page" id="colories">
            <a href="calories.php" data-icon="gear" data-ajax="false">食物熱量計算器</a>
          </li>
          <li data role="page" id="weight">
            <a href="weight.php" data-icon="star" data-ajax="false">孕後體重曲線圖</a>
          </li>
          <li data role="page" id="info">
            <a href="info.php" data-icon="info" data-ajax="false">更多資料</a>
          </li>
        </ul>
      </div>
    </div>
	<div data-role="content">
		今日飲食紀錄
	<form method="post" action="record.php">
		<div data-role="fieldcontain">
			<label for="date">日期:</label>
			<input type = "date" name = "recordDate" value = ""   />
		</div>	 
		<div data-role="fieldcontain">
			<label for="day">用餐類別</label>
			<select name="day" id="day">
				<option value="mon">早餐</option>
				<option value="tue">中餐</option>
				<option value="wed">晚餐</option>
				<option value="thu">點心</option>
				<option value="wed">消夜</option>
				<option value="thu">其他</option>
			</select>
		</div>
		<div data-role="fieldcontain">
			<label for="date">名稱:</label>
			<input type = "text" name = "food" value = ""   />
		</div>
		<div data-role="fieldcontain">
			<label for="date">熱量(kcal):</label>
			<input type = "number" name = "calory" value = ""   />
		</div>
      <input type="submit" data-inline="true" value="新增">
	  <input type="button" data-inline="true" value="歷史紀錄">
    </form>
	</div>
  </div>
  <div data-role="page" id="classify">
    <div data-role="header" data-position="fixed">
      <div data-role="navbar" data-iconpos="top">
        <ul>
          <li data role="page" id="main">
            <a href="main.php" data-icon="home" data-ajax="false">主頁面</a>
          </li>
         
          <li data role="page" id="colories">
            <a href="calories.php" data-icon="gear" data-ajax="false">食物熱量計算器</a>
          </li>

          <li data role="page" id="weight">
            <a href="weight.php" data-icon="star" data-ajax="false">孕後體重曲線圖</a>
          </li>
          <li data role="page" id="info">
            <a href="info.php" data-icon="info" data-ajax="false">更多資料</a>
          </li>
        </ul>
      </div>
    </div>
	<div data-role="content">
		<ul data-role="listview"   data-filter="true"  data-filter-placeholder="請輸入欲尋找的食物">
			<li data-role="list-divider" >綠燈食物區</li>
			<li>菠菜</li>
			<li data-role="list-divider" >黃燈食物區</li>
			<li>滷雞腿</li>
			<li data-role="list-divider" >紅燈食物區</li>
			<li>炸雞腿</li>
		</ul>
	</div>
  </div>
  
</body>

</html>