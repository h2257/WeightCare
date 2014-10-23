<!DOCTYPE html>
<?php 
include("data.php");
?>
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
<script language="JavaScript" type="text/javascript" >
function check(){
	if(document.all.form.d_date.value==''){
		msg="請輸入日期!";
		alert(msg);
		document.all.form.d_date.focus();
		return faise;
	}
	if(document.all.form.d_category.value==''){
		msg="請輸入用餐類別!";
		alert(msg);
		document.all.form.d_category.focus();
		return faise;
	}
	if(document.all.form.d_food.value==''){
		msg="請輸入食物名稱!";
		alert(msg);
		document.all.form.d_food.focus();
		return faise;
	}
	if(document.all.form.d_calorie.value==''){
		msg="請輸入熱量!";
		alert(msg);
		document.all.form.d_calorie.focus();
		return faise;
	}
}
//function find(){
		var cg=document.form.d_category.value;
		$sql="SELECT * FROM calorie WHERE category = "cg" ;";
		$result = mysql_query($sql);
		$num=mysql_numrows($result);
		$i=0;
		while ($i < $num){
			$foods=mysql_result($result,$i,"food");
			echo "<option>",$foods,"</option>\n";
			$i++;
		}
}
</script>
</head>
<body>
  <div data-role="page" id="calories">
    <div data-role="header" data-position="fixed">
      <div data-role="navbar" data-iconpos="top">
        <ul>
          <li data role="page" id="main">
            <a href="main.php" data-icon="home" data-ajax="false">主頁面</a>
          </li>
          
          <li data role="page" id="calorie">
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
	<form name="form" method="post" action="record.php" onsubmit=return(check())>
		<div data-role="fieldcontain">
			<label for="date">日期:</label>
			<input type = "date" name = "d_date" value = ""   />
		</div>	 
		<div data-role="fieldcontain">
			<label for="d_category">用餐類別</label>
			<select name="d_food" id="d_food">
	<!--			<option value="早餐">早餐</option>
				<option value="早餐">午餐</option>
				<option value="早餐">晚餐</option>
				<option value="早餐">水果</option>
				<option value="早餐">點心</option>
				<option value="早餐">消夜</option>
				<option value="早餐">其他</option>     -->
				
				<optgroup label="早餐">
					<?php
						$num1=mysql_numrows($result1);
						$i=0;
						while ($i < $num1)
						{
							$foods1=mysql_result($result1,$i,"food");
							echo "<option >",$foods1,"</option>\n";
							$i++;
						}
					?>
				<optgroup label="午餐">
					<?php
						$num2=mysql_numrows($result2);
						$i=0;
						while ($i < $num2)
						{
							$foods2=mysql_result($result2,$i,"food");
							echo "<option >",$foods2,"</option>\n";
							$i++;
						}
					?>
				<optgroup label="晚餐">
					<?php
					$num3=mysql_numrows($result3);
						$i=0;
						while ($i < $num3)
						{
							$foods3=mysql_result($result3,$i,"food");
							echo "<option >",$foods3,"</option>\n";
							$i++;
						}
					?>
				<optgroup label="水果">
					<?php
					$num4=mysql_numrows($result4);
						$i=0;
						while ($i < $num4)
						{
							$foods4=mysql_result($result4,$i,"food");						
							$weight4=mysql_result($result4,$i,"weight");
							echo "<option >",$foods4,"</option>";
							echo $weight4;
							
							$i++;
						}
					?>
				<optgroup label="點心">
					<?php
						$num5=mysql_numrows($result5);
						$i=0;
						while ($i < $num5)
						{
							$foods5=mysql_result($result5,$i,"food");
							echo "<option >",$foods5,"</option>\n";
							$i++;
						}
					?>
				<optgroup label="消夜">
					<?php
						$num6=mysql_numrows($result6);
						$i=0;
						while ($i < $num6)
						{
							$foods6=mysql_result($result6,$i,"food");
							echo "<option >",$foods6,"</option>\n";
							$i++;
						}
					?>
				<optgroup label="其他">
					<?php
						$num7=mysql_numrows($result7);
						$i=0;
						while ($i < $num7)
						{
							$foods7=mysql_result($result7,$i,"food");
							echo "<option >",$foods7,"</option>\n";
							$i++;
						}
					?>
			</select>
		</div>
<!--		<div data-role="fieldcontain">
			<label for="d_food">名稱:</label>
			<select name="d_food" id="d_food"  >
			</select>
		</div>
		-->
		<div data-role="fieldcontain">
			<label for="quantity">份量:</label>
			<input type = "number" name = "quantity" value = ""   />
		</div>
		<div data-role="fieldcontain">
			<label for="d_calorie">熱量(kcal):</label>
			<input type = "number" name = "d_calorie" value = ""   />
		</div>
		<div data-role="content" data-type="horizontal" align="right">
        <input type="submit" name="dietRecord" data-inline="true"  value="新增!"/>
		</div>
    </form>
	<a href="#history" data-role="button" data-inline="true">歷史紀錄</a>
	<a href="#classify" data-role="button" data-inline="true">飲食紅綠燈</a>
	</div>
  </div>

  <div data-role="page" id="history">
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
	<p>
	<?php
		while($diet_history = mysql_fetch_array($h_result))
			{
   				 echo  $diet_history["d_date"]." ".$diet_history['d_category']." ".$diet_history["d_food"]." ".$diet_history['d_calorie']."
		 					<br>";
			}
		?>
		</p>
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