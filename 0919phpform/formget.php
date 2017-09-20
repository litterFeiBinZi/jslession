<?php
	//声明变量
//	 $name = "1";
//	 $name1="12";
//	 $num=$name.$name1;
//	 echo $num."<hr />";
//	 
	 
	 // php中+只进行运算， . 才是拼接字符串
//	 echo $name + $name1."</br>";
//	 echo $name.$name1."<hr />";

		// php中双引号带有变量解析功能，单引号代表纯字符串
	 	// 双引号解析变量的时候，可以使用{}括起变量名	
 	// 打印大括号，在{{}}在外面打印大括号就ok
	 	// $ia的话php认为他是一个变量，空格不会解析
	 	// echo "数字是 $i 号</br>";
	 	// echo "数字是{$i}号</br>";

//
//	for($i=0;$i<10;$i++){
//		echo "这是第{{$i}}行"."<hr />";
//	}








//	 for($i=0;$i<10;$i++){
//	 	 echo "数字是".($i+1)."号</br>";

	 	// php中双引号带有变量解析功能，单引号代表纯字符串
	 	// 双引号解析变量的时候，可以使用{}括起变量名
	 	// 打印大括号，在{{}}在外面打印大括号就ok
	 	// $ia的话php认为他是一个变量，空格不会解析
	 	// echo "数字是 $i 号</br>";
	 	// echo "数字是{$i}号</br>";

//	 	$v=$i+1;
	 	// 打印1-10号如何进行
 	// 双引号解析变量但是不会解析运算
		// echo "数字是{$v}号</br>";
//		echo "数字是".($i+1)."号<hr>";

//	 }
		// $myage=18;
		// $yourage=&$myage;//去除$yourage的地址，赋给$yourage，修改$yourage会影响$myage

		// $yourage=19;

		// echo "<hr>";
		// echo $yourage;
		// echo $myage;

//		// php的函数的写法 	
//		 function say($a){
//		 	$a=24556;
//		 	echo "say $a";
//		 }
//		 $num=12;
//		 // say(14);
//		 say($num);
//		 echo $num;

		// 穿进去一个参数放大十倍
		//函数内部修改函数外部变量的值 
		// 如果需要函数内部修改函数外部的值，参数前面需要添加&符号，进行取址操作
		// function test(&$a){
		// 	$a=$a*10;
		// }
		// $b=10;
		// test($b);

		
		// // $c=&$b;
		// // $c=1333;
		// echo $b;





		// 变量的变量
		// 最多写两个
		// $one="hello";
		// $$one="world";

		// echo $one." ".$hello;
	


		// 超全局变量
		//打印字符串用echo
//		$_SERVER代表的是数组
		//打印数组 print_r
//		$_SERVER(包含所有服务器相关的信息)
//		print_r($_SERVER);
//
//		 $_SERVER["SERVER_NAME"]当前脚本运行的服务器所在的域名
//		 $_SERVER["REMOTE_ADDR"]客户端的ip地址
//		 $_SERVER["REQUEST_URI"]URL的路径部分
//		 $_SERVER["HTTP_USER_AGENT"]操作系统和浏览器有关的信息
//		echo "<hr>".$_SERVER["SERVER_NAME"];
//		echo "<hr>".$_SERVER["REMOTE_ADDR"];
//		echo "<hr>".$_SERVER["REQUEST_URI"];
//		echo "<hr>".$_SERVER["HTTP_USER_AGENT"];
	
		print_r($_GET);

?>