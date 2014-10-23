<?php 
include("data.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>main</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
    <script src="http://www.jqplot.com/deploy/dist/jquery.min.js"></script>
    <script src="http://www.jqplot.com/deploy/dist/jquery.jqplot.min.js"></script>
    <link class="include" rel="stylesheet" type="text/css" href="http://www.jqplot.com/deploy/dist/jquery.jqplot.min.css" />
    <script class="include" type="text/javascript" src="http://www.jqplot.com/deploy/dist/plugins/jqplot.dateAxisRenderer.min.js"></script>
    <script class="include" type="text/javascript" src="http://www.jqplot.com/deploy/dist/plugins/jqplot.canvasTextRenderer.min.js"></script>
    <script class="include" type="text/javascript" src="http://www.jqplot.com/deploy/dist/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
	<script class="include" type="text/javascript" src="http://www.jqplot.com/deploy/dist/plugins/jqplot.cursor.min.js"></script>
    <script class="include" type="text/javascript" src="http://www.jqplot.com/deploy/dist/plugins/jqplot.highlighter.min.js"></script>
   
</head>
<body>
  <div data-role="page" id="main">
    <div data-role="header" data-position="fixed">
      <div data-role="navbar" data-iconpos="top">
        <ul>
          <li>
            <a href="main.php" data-icon="home"class="ui-btn-active">主頁面</a>
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
			<li data-role="list-divider">狀態:<?php ; ?></li> <!--綜合狀態 -->
				<p>
					目前體重:&nbsp;&nbsp;<?php echo $row[7] ;?>kg
				</p>
				<p>
					孕期建議增加重量：<?php echo total_increase($bmi) ;?>kg
				</p>
				<p>
					當前階段：第<?php echo stage($preg_date)  ;?>妊娠期 
				</p>
				<p>
					建議增加重量：約<?php echo stage_increase($bmi,$preg_date) ;?>kg/周 
				</p>
				<p>
					每日建議攝取熱量：約
					<?php if(stage($preg_date)==1){echo $row[6]*basic($bmi,$row[9]) ;}
						else{echo $row[6]*basic($bmi,$row[9])+300 ;}?>大卡
				</p>
			<li data-role="list-divider">建議體重趨勢圖：</li>
				<img src="delete.jpg" height="auto" width="device-width">
				<p>
					第1妊娠期(3~12週)：+0~0.2kg/周
				</p>
				<p>
					第2妊娠期(12~24週)：+<?php echo stage_increase($bmi,0)?>kg/周
				</p>
				<p>
					第3妊娠期(24~40週)：+<?php echo stage_increase($bmi,0) ?>kg/周 
				</p>
				
				
				
	</div>
  </div>
</body>
</html>
