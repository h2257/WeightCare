<!DOCTYPE html>
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
</head>
<body>
  <div data-role="page" id="register">
    <div data-role="header">
      <h2>基本資料</h2>
    </div>

    <form name="form" method="post" action="register_build.php">
		<div data-role="fieldcontain">
			<label for="name">姓&nbsp;&nbsp;名:</label>
			<input type="text" name="name" value=""  data-mini="true" />
		</div>
		<div data-role="fieldcontain">
			<label for="age">年&nbsp;&nbsp;齡:</label>
			<input type="number" name="age" value=""  data-mini="true" />
        </div>
		<div data-role="fieldcontain">
			<label for="date">懷孕時間:</label>
			 <input type = "date" name = "pregnancy_date" value = ""   /> 
        </div>
		<div data-role="fieldcontain">
			<label for="height">身&nbsp;&nbsp;高:</label>
			<input type="number" name="height" value=""  data-mini="true" />
		</div>
		
		<div data-role="fieldcontain">
			<label for="origin_weight">孕前體重:</label>
			<input type="number" name="begin_weight" value="" placeholder="請輸入懷孕前或初期體重"   data-mini="true" />
		</div>
		
		<div data-role="fieldcontain">
			<label for="weight">目前體重:</label>
			<input type="number" name="current_weight" value="" placeholder="請輸入現在的體重"   data-mini="true" />
		</div>
		
		<div data-role="fieldcontain">
			<fieldset data-role="controlgroup" data-type="horizontal">
				<legend>胎兒數:</legend>
				<input type="radio" name="fetal_num" id="single" value="1">   
				<label for="single" >單胞胎 </label>
				<input type="radio" name="fetal_num" id="twin" value="2">   
				<label for="twin" >雙胞胎 </label>
				<input type="radio" name="fetal_num" id="multiple" value="3">   
				<label for="multiple" >多胞胎 </label>
				</fieldset>
		</div>
		<div data-role="fieldcontain">
			<label for="id">帳號:</label>
			<input type="text" name="id" value="" placeholder="input id" data-mini="true" />
		</div>
		<div data-role="fieldcontain">
			<label for="id">密碼:</label>
			<input type="password" name="pw" value=""  data-mini="true" />
		</div>
		<div data-role="content" data-type="horizontal" align="right">
			<input type="submit" data-inline="true" value='提交' >
			<input type="reset" data-inline="true" value='重新輸入'>
			
			
		</div>
    </form>
  </div>
</body>
</html>
