<?php session_start();?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<?php 
include("db_conn.php");

if($_SESSION['ID']!=null){
	$id = $_SESSION['ID'];
	$sql = "SELECT * FROM mommy WHERE id = '$id' ;";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	
	$bmi =  round($row[6]*10000/$row[5]/$row[5],2);
	$preg_date=explode("-",$row[4]);
	$kg = $row[6];
	//bmi狀態
	function bmi_state( $b ){
		if($b<18.5){
			return "過輕";
		}
		else if($b>=18.5 && $b<24){
			return "適中";
		}
		else if($b>=24 && $b<30){
			return "過重";
		}
		else if($b>=30){
			return "肥胖";
		}
	}
	//總增加體重
	function total_increase($b){
		if($row[8]>=3){
			return "22.7"; 
		}
		else if($row[8]==2){
			return "15.9~20.4"; 
		}
		else{
			if($b<19.8){
				return "12.5~18";
			}
			else if($b>=19.8 && $b<26.0){
				return "11.5~16";
			}
			else if($b>=26.0 && $b<29.0){
				return "7.0~11.5";
			}
			else if($b>=29.0){
				return "<=7.0";
			}
		}
	}
	//一日所需熱量基礎單位
	function basic($b){
		if($b<18.5){
			if($row[9]==1){
				$w = 35;
			}
			elseif($row[9]==2){
				$w = 40;
			}
			else{
				$w = 45;
			}
		}
		else if($b>=18.5 && $b<24){
			if($row[9]==1){
				$w = 30;
			}
			elseif($row[9]==2){
				$w = 35;
			}
			else{
				$w = 40;
			}
		}
		else{
			if($row[9]==1){
				$w = 25;
			}
			elseif($row[9]==2){
				$w = 30;
			}
			else{
				$w = 35;
			}	
		}
		return $w;
	}
	//孕期階段
	function stage($p){
		$preg_time= mktime(0,0,0,$p[1],$p[2],$p[0]);
		$week=round((time()-$preg_time)/3600/24/7);
		if($week<=12){
				return "1";
			}
			else if($week>12 && $week<=24){
				return "2";
			}
			else if($week>24 && $week<=40){
				return "3";
			}
		
	}
	//12周後,分期增加體重/周
	function stage_increase($b,$p){
		if(stage($p)==1){
			return "0~0.2";
		}
		else {
			if($row[8]>=3){
				return "0.8";
			}
			else if($row[8]==2){
				return "0.5~0.7"; 
			}
			else {
				if($b<19.8){
					return "0.5";
				}
				else if($b>=19.8 && $b<26.0){
					return "0.4";
				}
				else if($b>=26.0 && $b<29.0){
					return "0.3";
				}
				else if($b>=29.0){
					return "0.2";
				}
			}
		}
	}
	
	
	//綜合身體狀況
}
?>