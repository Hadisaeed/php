



		<?php

				echo"<h1>Working With String Functions</h1>";

				echo"<h3>Example One</h3>";

			$myString= "Hello world";
			echo"The String is : " .$myString;
			
			$result= strlen($myString);
				
			echo "<br>" . "The length of string is :" . $result;

			echo"<h3>Example Two</h3>";
			$myString1 = "My name is Hadi";
			echo"The string is:".$myString1;
			$result = str_word_count($myString1);
			echo"<br>"."The Total Words in a string is:".$result;

			
				echo"<h3>Example Three</h3>";

			$string = "Welcome To Php";
			echo"The String is : " .$string;
			$result= strrev($string);
			echo"<br>"."The Reverse String Is: ".$result;

			
			
				echo"<h3>Example Four</h3>";


				$string= "Welcome to Php Language";
				echo"The String is: " .$string;
				$result=strpos("$string","Php");
				echo"<br>"."The word is:".$result;

				
				echo"<h3>Example Five</h3>";


				$string= "Welcome to Php Language";
				echo"The String is: " .$string;
				$result=str_replace("Php","Html","$string");
				echo"<br>"."The word is:".$result;






		?>