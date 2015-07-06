



	<?php


		echo"<h1>Associative Array Sorting</h1>";
		echo"<h3>Sorting Of Associative Array in Decending Order With Respect to  Value</h3>";
		echo"<h4>Example One</h4>";



		$books=array("Php" => 550 , "Bootstrap" => 350 ,"HTML" => 380 , "CSS3" => 320 , "JS"=> 450);
		echo"<p>Before Sorting:</p>";

		foreach($books as $key=>$value)
		{

			echo $key;
			echo " book is ";
			echo $value;
			echo"<br>";


		}
		
			arsort($books);		//arsort sort the associative array with respect to values in Decending order
		echo"<p>After Sorting:</p>";
		foreach($books as $key=>$value)
		{

			echo $key;
			echo " book is ";
			echo $value;
			echo"<br>";


		}

		echo"<h3>Sorting Of Associative Array in Decending Order With Respect to  Key</h3>";
		echo"<h4>Example Two</h4>";



		$books1=array("Php" => 550 , "Bootstrap" => 350 ,"HTML" => 380 , "CSS3" => 320 , "JS"=> 450);
		echo"<p>Before Sorting:</p>";

		foreach($books1 as $key=>$value)
		{

			echo $key;
			echo " book is ";
			echo $value;
			echo"<br>";


		}
		
			krsort($books1);		//ksort sort associative array with respect to key in Decending order 
		echo"<p>After Sorting:</p>";
		foreach($books1 as $key=>$value)
		{

			echo $key;
			echo " book is ";
			echo $value;
			echo"<br>";


		}
			
		




	?>