<!DOCTYPE html>
<html>
<head>
<title>weight</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>  
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script> 
    <script src="http://www.jqplot.com/deploy/dist/jquery.min.js"></script>
    <script src="http://www.jqplot.com/deploy/dist/jquery.jqplot.min.js"></script>
    <link class="include" rel="stylesheet" type="text/css" href="http://www.jqplot.com/deploy/dist/jquery.jqplot.min.css" />
    <script class="include" type="text/javascript" src="js/jqplot/plugins/jqplot.dateAxisRenderer.min.js"></script>
    <script class="include" type="text/javascript" src="http://www.jqplot.com/deploy/dist/plugins/jqplot.canvasTextRenderer.min.js"></script>
    <script class="include" type="text/javascript" src="http://www.jqplot.com/deploy/dist/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
    <script class="include" type="text/javascript" src="http://www.jqplot.com/deploy/dist/plugins/jqplot.cursor.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
  var line1=[['2014/06/01',52], ['2014/07/01',53], ['2014/08/01',55], ['2014/09/01',56],['2014/10/01',56.5],['2014/11/01',57],['2014/012/01',58],['2015/01/01',59],['2015/02/01',60],['2015/03/01',62]];
  var line2=[['2014/06/01',56], ['2014/07/01',51], ['2014/08/01',52], ['2014/09/01',53],['2014/10/01',52.5],['2014/11/01',53.5],['2014/012/01',57],['2015/01/01',58],['2015/02/01',59.5],['2015/03/01',60]];
  var plot1 = $.jqplot('chart1', [line1,line2], {
      title:'孕婦體重成長曲線圖', 
      gridPadding:{right:35},
        axesDefaults: {
            pad: 1.05
        },


      fillBetween:{
        series1: 0,
        series2: 1,
        color: "rgba(232, 44, 12, 0.5)",
        baseSeries: 0,
        fill:true
      },

      seriesDefaults:{
        rendererOptions: {
                smooth: true
        }
      },

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
      cursor:{ 
        zoom:true
      },
  });
});

</script>

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
      <div id="chart1" style="height:200px; width:device-width;"></div>
        <div data-role="fieldcontain">
          <label for="mydate">請輸入日期</label>
          <input name="mydate" id="mydate" type="date" data-role="datebox" data-options='{"mode": "flipbox"}'/>
        </div>
        <div data-role="fieldcontain">
            <label for="weight">輸入當日體重</label>
            <input name="weight" id="weight" type="tel" pattern="[0-9]*"/>
        </div>
    </div>
  </div>
</body>
</html>​