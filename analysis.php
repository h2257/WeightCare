<!DOCTYPE html>
<?php 
include("data.php");
?>
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
  <div data-role="page" id="analysis">
    <div data-role="header">
      <h2>狀態分析</h2>
    </div>
	
	<div data-role="content">
		體重管理評估:
		<div data-role="content">
			孕前BMI: <?php echo $bmi ; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			體重:<?php echo bmi_state( $bmi ) ;?>
		</div>
		<div data-role="content">
			孕期建議增加重量:<?php echo total_increase($bmi) ;?>kg
		</div>
		<div data-role="content">
			每日建議攝取熱量:約<?php echo $row[6]*basic($bmi) ;?>大卡
		</div>
	</div>
	<div data-role="content">理想增重趨勢圖:</div>
		<div id="chart1" style="height:200px; width:device-width;"></div>  
	

    <div data-role="content" data-type="horizontal" align="right">
		<a href='main.php' data-role="button" data-inline="true">ok</a>
	</div>
  </div>
</body>
</html>
