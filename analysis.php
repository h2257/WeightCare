<!DOCTYPE html>
<?php session_start(); ?>

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
]		</div>
		<div data-role="content">
			孕期建議增加重量:<?php echo total_increase($bmi) ;?>kg
		</div>
		<?php
				echo $preg_date;
				echo $date;
				echo date("Y-m-d", strtotime($date."+1 week -2 day"));

			?>
		<div data-role="content">
			每日建議攝取熱量:約<?php echo $row[6]*basic($bmi) ;?>大卡
		</div>
	</div>
    <div data-role="content" data-type="horizontal" align="right">
		<a href='main.php' data-role="button" data-inline="true">ok</a>
	</div>
  </div>
</body>
</html>
