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
    <script type="text/javascript">
$(document).ready(function(){
  var line1=[['2014/06/01',52], ['2014/07/01',53], ['2014/08/01',54], ['2014/09/01',55],['2014/10/01',56],['2014/11/01',57],['2014/012/01',58],['2015/01/01',59],['2015/02/01',60],['2015/03/01',62]];
  var line2=[['2014/06/01',54], ['2014/07/01',52], ['2014/08/01',53], ['2014/09/01',55],['2014/10/01',56],['2014/11/01',56.5],['2014/012/01',57],['2015/01/01',58],['2015/02/01',59.5],['2015/03/01',60]];
  var plot1 = $.jqplot('chart1', [line1,line2], {
      title:'孕婦體重成長曲線圖', 
      gridPadding:{right:35},
      axes:{
        xaxis:{
          label:"日期",
          renderer:$.jqplot.DateAxisRenderer, 
          tickOptions:{formatString:'%y %#d, %b'},
          min:'2014/05/01', 
          tickInterval:'1 month'
        },
        yaxis:{
          label:"體重(kg)"
        }
      },
      series:[{lineWidth:4, markerOptions:{style:'square'}}]
  });
});

</script>
</head>
<body>
  <div data-role="page" id="main">
    <div data-role="header" data-position="fixed">
      <div data-role="navbar" data-iconpos="top">
        <ul>
          <li>
            <a href="#" data-icon="home"class="ui-btn-active">主頁面</a>
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
			<li data-role="list-divider">狀態:</li>
				<p>
					孕前BMI:22.04&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;狀態:理想
				</p>
				<p>
					孕期建議增加重量：11.5~16kg
				</p>
				<p>
					當前階段：第一妊娠期 建議增加0~0.2kg/周
				</p>
				<p>
					每日建議攝取熱量：約1800大卡
				</p>
			<li data-role="list-divider">建議體重趨勢圖：</li>
				<div id="chart1" style="height:200px; width:device-width;"></div>
				<p>
					第一妊娠期(3~12周) 建議增加0~2kg
				</p>
				<p>
					第二妊娠期(12~24) 建議增加約5kg
				</p>
				<p>
					第三妊娠期(24~40) 建議增加約5kg
				</p>
	</div>
  </div>
</body>
</html>
