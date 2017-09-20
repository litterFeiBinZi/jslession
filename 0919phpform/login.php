<?php
	// $_GET该变量包含GET方法传递的参数的有关信息(也是一个数组)
//	 print_r($_GET);
	 $username=$_GET["username"];
	 $password=$_GET["pwd"];
	 echo "用户名：".$username."密码：".$password;

	// $_POST 该变量包含使用POST方法传递的参数的有关信息
	// print_r($_POST);
	// $username=$_POST["username"];
	// $password=$_POST["pwd"];
	// echo "用户名：".$username."密码：".$password;


	// $GLOBALS所有全局变量数组，保存着所有的变量
//	print_r($GLOBALS);
?>