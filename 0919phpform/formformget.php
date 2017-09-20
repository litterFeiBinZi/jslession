<?php
	$username=$_GET["username"];
	$sex=$_GET["sex"];
	$age=$_GET["age"];
	
	print_r($_GET);
	
	echo "<hr />";
	
	echo "后台获取的用户名:".$username."<hr />";
	echo "后台获取的性别是:".$sex."<hr />";
	echo "后台获取的年龄是:".$age."<hr />";
	
?>