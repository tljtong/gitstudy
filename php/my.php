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
		
	</p>