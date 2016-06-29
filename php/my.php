<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<p style="font-size:22px;">
		<?php
			echo "hello world";
			#我 是 好 人
			//我是好人
			/*我 是 好 人*/
			echo "导演，你好";	
		?>
		<?php
			$a = 3;//声明一个整型变量
			var_dump($a);
			$b = 2.1;//声明了一个浮点型变量
			var_dump($b);
			$c = 'xinxing';//声明了一个字符型变量
			var_dump($c);
			$d = True;//声明一个布尔型变量
			var_dump($d);
		?>
		<?php
			$b1 = True;
			$b2 = False;
			echo "进行与运算："; var_dump($b1 &$b2);echo "<br/>";
			echo "进行或运算："; var_dump($b1 |	$b2);echo "<br/>";
			echo "$ b1进行非运算";var_dump(!$b1);echo "<br/>";
		?>
		<?php
			$name1 = "king";
			$name2 = " hilda";	
			echo $name1.$name2;
		?>
		<?php 
			$equal1 = 4 >= 5;
			$equal2 = 4 <= 5;
			var_dump($equal1);
			var_dump($equal2);
		?>
		<?php
			$a = 4 >=5 ? 'king':'hilda';
			echo $a;
		?>
		<?php
			$a = 4;
			if($a == 0){
				echo "king 永远爱着 hilda";
			}elseif($a == 4){
				echo "king 爱不爱 hilda";
			}elseif($a == 5){
				echo "king 爱着其他人";
			}else{
				echo "hilda 当和尚去啦！";
			}
			echo "<br/>";
			echo "php 好好学习，天天向上";
			echo "<br/>";
		?>
		<?php
			$a = 2;
			if($a == 0){
				echo "king 永远爱着 hilda";
			}elseif($a == 4){
				echo "king 爱不爱 hilda";
			}elseif($a == 5){
				echo "king 爱着其他人";
			}else{
				echo "hilda 当和尚去啦！";
			}
			echo "<br/>";
			echo "php 好好学习，天天向上";
		?>
		<?php 
			$a = 0;
			while($a <=13){
				echo "现在是$a 点","  ";
				echo "hilda 童鞋还在编程中","<br/>";
				$a ++;
			}
			echo "yes , 终于完成工作了。。。";
		?>
		<?php 
			for($a = 5;$a <=12;$a++){
				echo "现在是$a 点";
				if($a <=9){
					echo "小君陪着小童敲代码";
				}else{
					echo "小君睡觉去了，小童在敲代码";
				}
				echo "<br/>";
			}
		?>
		<?php
		  for($c =6;$c<=12;$c++){	
		  	echo "现在$c 点";
		  	if($c <=9){
		  		echo "小童陪小君敲代码";
		  	}else{
		  		echo "小童睡觉去了，小君还在敲代码";
		  	}
		  	echo "<br/>";
		  } 
		?>
		<?php
			for($d = 5;$d<=12;$d++){
				echo "现在 $d 点","现在小童还在敲代码";
				echo "<br/>";
				if($d == 8){
					break;
				}
			} 
			echo "循环结束，打完收工";
			echo "<br/>";
		?>
		<?php
			for($e = 5;$e<=12;$e++){
				echo "现在$e 点";
				if($e ==8){
					echo "<br/>";
					continue;
				}
				echo "小童在敲代码","<br/>";
			} 
		?>
		<?php
			for($f = 5;$f<=12;$f++){
				echo "现在 $f 点";
				if($f == 8){
					echo "<br/>";
					/*return;*/
				}
				echo "小童还在敲代码","<br/>";
			} 
			echo "循环结束，打完收工","<br/>"
		?>
		<?php
			function sum ($a,$b) 
			{ 
				echo $a+$b; 
			} 
			sum(100,20); //开始调用该函数 	
		?>
		<?php
			function king ($name,$age){
				echo $name.$age;
				echo "<br/>";
			}
			king("king","28");
			king("hilda","18");
		?>

		<?php
			function hilda(){
				echo "king";
			} 
			hilda();
			echo "<br/>";
		?>
		<?php 
			function big($a,$b,$c){
				$d = $a>$b?$a:$b;
				$e = $d>$c?$d:$c;
				echo "最大值是：",$e;
				echo "<br/>";
			}
			big(1.1,0,-1);
		?>
		<?php 
			function msg($name,$age,$sex = "男"){
				echo "姓名：",$name, " 年龄 ：",$age," 性别 ：",$sex;
				echo "<br/>";
			}
			msg("king",24);
			msg("hilda",20,"女");
			msg("tong",28,"未知");
		?>
		<?php 
			function add($a,$b){
				return $a + $b;
			}
			$c = add(12,20);
			echo $c;
			echo "<br/>";
			echo add(add(4,3),5);
		?>
		<?php 
			$arr = array('banana','apple','orange');
			var_dump($arr);
		?>
	</p>