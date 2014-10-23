<?php session_start();?>
<?php 
include("db_conn.php");
$id=$_SESSION['ID'];
?>
<?php    
if(isset($_POST['dietRecord'])){ //check if form was submitted
$d_date=$_POST['d_date'];
$d_category=$_POST['d_category'];
$d_food=$_POST['d_food'];
$d_calorie=$_POST['d_calorie'];

$sql_input_update ="INSERT INTO diet_history(`id`, `d_date`, `d_category`,`d_food`, `d_calorie`) VALUES ('$id', '$d_date', '$d_category', '$d_food', '$d_calorie')";

  if ($d_date!=="" and $d_food!==""and $d_calorie!==""){
  mysql_query($sql_input_update);
  header("Location:calories.php"); 
  }
}    
?>