		// 封装存储cookie的函数
//		var cookie=document.cookie;
//		function setCookie(key,value,day){
//			// 获取当前时间
//			var date=new Date();
//			// 返回日期中具体的某一天
//			var nowDate=date.getDate();
//			// 计算过期的时间
//			date.setDate(nowDate+day);
//			document.cookie=key+"="+value+";expires="+date;
//		}
		
		//获取cookie  通过name
		function getCookie(k){
			// 通过分号和空格将字符串解析成数组
			var arr=document.cookie.split("; ");
//			console.log(arr);
			// 循环获取需要的cookie值
			for(var i=0;i<arr.length;i++){
				//通过等号,将数组再次解析
				var arr2=arr[i].split("=");
				console.log(arr2);
				// 判断,通过下标获取对应的key,如果与传进来的key相同,那么返回
				if (arr2[0]==k) {
					return arr2[1];
				}
			}
		}