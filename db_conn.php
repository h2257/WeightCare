﻿<!DOCTYPE html>
<html>
<head>
<title>WeightCare</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script src="js/custom.js"></script>
</head>
<?php
$connect = mysql_connect("localhost","root","");
if (!$connect)
	die('Could not connect :'.mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_select_db("weightcare", $connect);
?>