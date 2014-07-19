﻿<!DOCTYPE html>
<html>
<head>
<title>jqplot</title>
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
    <div data-role="header">
      <h3>jqplot</h3>
    </div>
    <div data-role="content">
      <div id="chart1" style="height:200px; width:700px;"></div>
      <input type="submit" data-inline="true" value='關閉' onclick ="location.href='analysis.php'">
    </div>
  </div>
</body>
</html>​