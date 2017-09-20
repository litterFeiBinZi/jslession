//var a=1;
//function go(){
//	console.log(a);
//}
//go();
//console.log(a);

//在函数外部声明的变量为全局变量
//函数内部声明的变量为局部变量
//函数内部可以访问函数外部的值
//但是函数外部不能访问函数内部的值

//{}之间为这个函数的作用域
//function go(){
//	var a=1;
//	console.log("我是函数内部打印的："+a);
//}
//go();
//console.log("我是函数外部部打印的："+a);


//function go(){
//	a=1;
//	console.log("我是函数内部打印的："+a);
//}
//
//
//go();
//console.log("我是函数外部部打印的："+a);

var a=1;

function go(){
	
	var b=2;
	var a=4;
	
	console.log(b);//2
	
	function go2(){
		
		console.log(a);//1
	}
	
	go2();
}

go();

console.log(a);//1

//当在本层的作用域查找不到的时候,他会向上一层进行查找,当上一层又查不到的时候继续朝上查找,一直查找到全局作用域,如果在某一层的作用域查找到了的时候,停止查找进行相关操作,这就是作用域链的一种表现























