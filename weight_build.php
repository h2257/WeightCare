<?php session_start();?>
<?php 
include("db_conn.php");
$id=$_SESSION['ID'];
?>
<?php    
if(isset($_POST['graph'])){ //check if form was submitted
$input_mydate=date('Y-m-d');
$input_myweight = $_POST['input_myweight']; //get input text
$sql_input_update ="INSERT INTO weight_date(`id`, `mydate`, `myweight`) VALUES ('$id', '$input_mydate', '$input_myweight')";

  if ($input_mydate!=="" and $input_myweight!==""){
  mysql_query($sql_input_update);
  header("Location:main.php"); 
  }
}    
?>
