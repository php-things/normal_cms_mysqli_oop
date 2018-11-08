<?php 
	include('connection.php');
	include_once('class/class.php');
	include_once('object/object.php');
	$db = db_connect();
?>
<!DOCTYPE html>
<html lan= "en">
	<head>
		<title>Basic CMS Site...</title>
		
		<style type="text/css">
			table {
    			border-collapse: collapse;
				}

			table, th, td {
    		border: 1px solid black;
			}
			.div_fst
			{
				float: left;
				width: 200px;
			}

			.div_snd
			{
				float: left;
				width: 200px;
			}
			.clr{
				clear: both;
			}
		</style>

	</head>
	<body>
		