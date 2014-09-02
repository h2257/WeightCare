<!DOCTYPE html>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_conn.php");

$id = $_POST["id"];
$pw = $_POST["pw"];
$name = $_POST["name"];
$age = $_POST["age"];
$pregnancy_date = $_POST["pregnancy_date"];
$height = $_POST["height"];
$begin_weight = $_POST["begin_weight"];
$current_weight = $_POST["current_weight"];
$fetal_num = $_POST["fetal_num"];

//$sql1= "select id from mommy;";
//$result = mysql_query($sql1);
//$all_id = mysql_fetch_row($result);
$sql_add = "INSERT INTO mommy(`id`, `pw`, `name`, `age`, `pregnancy_date`, `height`, `begin_weight`, `current_weight`, `fetal_num`) VALUES (
			'$id', '$pw', '$name', '$age', '$pregnancy_date', '$height', '$begin_weight', '$current_weight', '$fetal_num' )";
if(mysql_query($sql_add))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=analysis.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
        }



?>