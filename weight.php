<?php session_start();?>
<?php 
include("db_conn.php");
$id=$_SESSION['ID'];
?>

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
    <form action="weight_build.php" method="post">
    <div data-role="content">
        <div id="chart1" style="height:200px; width:device-width;"></div>
        <div data-role="fieldcontain">
            <label for="weight">輸入當日體重</label>
            <input name="input_myweight" id="input_myweight" type="tel" pattern="[0-9]*"/>
        </div>
    </div>
    <div class="example-content"> 
<!-- Example scripts go here --> 
      <br><input type="submit" name="graph" value="Graph It!"> 
    </div> 
    </form> 
<?php
$mysql_str = "select mydate,myweight from weight_date where id='$id'"; 
$result = mysql_query($mysql_str); 
while($row = mysql_fetch_array($result)) { 
$grossTop = array(
    $grossTop[] = $row['mydate'],
      number_format($row['myweight'], 1)
);
header('ContentType: application/json; charset=utf-8');
?>

<?php
$result_str.=json_encode($grossTop,JSON_NUMERIC_CHECK).",";
}
?>
<?php 
$result_str1.="[".$result_str."]";
//echo $result_str1;
?>

<script class="include" type="text/javascript"> 
  var s1 = <?php echo $result_str1;?>;
  var line1=[["2014-06-01",52], ["2014-07-01",53], ["2014-08-01",55], ["2014-09-01",56],["2014-10-01",56.5],["2014-11-01",57],["2014-12-01",58],["2015-01-01",59],["2015-02-01",60],["2015-03-01",62],];
<?php
print '$(document).ready(function () {' . "\n"; 
?>
  var line2=[['2014-06-01',50], ['2014-07-01',50], ['2014-08-01',51], ['2014-09-01',52],['2014-10-01',53],['2014-11-01',54],['2014-12-01',55],['2015-01-01',56],['2015-02-01',57],['2015-03-01',58]];

lowerBand = [];
upperBand = [];

for(var i = 0; i < line2.length; i++) {
        lowerBand.push([line2[i][0], line2[i][1] * 0.9]);
        upperBand.push([line2[i][0], line2[i][1] * 1.1]);
}

plot1 = $.jqplot("chart1", [s1, line2],{ 
title: "孕婦體重成長曲線圖", 
animate: true, 
animateReplot: true, 
cursor: { 
show: true, 
zoom: true, 
looseZoom: true, 
showTooltip: false 
}, 
seriesDefaults:{ 
renderer: $.jqplot.BarRenderer, 
pointLabels: { 
show: false 
}, 
showHighlight: true, 
rendererOptions: { 
animation: { speed: 2500 }, 
highlightMouseOver: false 
} 

}, 
series:[ 
{rendererOptions: {
            bandData: [lowerBand, upperBand]
        }
},
{ label:'ideal'}, 
{ label:'real'} 

], 
legend: { 
show: true, 
placement: 'insideGrid' }, 
axesDefaults: { 
pad: 1.05 
}, 

axes: { 
// These options will set up the x axis like a category axis. 
  xaxis: { 
        label:"日期",
        renderer:$.jqplot.DateAxisRenderer, 
        tickOptions:{formatString:'%y-%m-%d'},
        min:'2014-05-01', 
        tickInterval:'3 month'  }, 
  yaxis: { 
          label:"體重(kg)"
  }, 
}, 
highlighter: { 
show: true, 
showLabel: true, 
tooltipAxes: 'y', 
sizeAdjust: 7.5 , tooltipLocation : 'ne' 
} 


}); 

plot1.replot();

}); 
</script> 
  </div>
</body> 
</html> 
