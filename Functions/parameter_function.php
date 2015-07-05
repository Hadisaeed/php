


	<?php



		// function with arguments

			echo"<h1>Functions With Arguments</h1>";
			echo"<h3>Example One</h3>";

		function familyName($fname)	//function with one argument
		{

			echo"<p>$fname saeed</p>";

		}
			familyname("Asim");
			familyname("Yasir");
			familyname("Sadia");
			familyname("Umair");
			familyname("Hadi");

				
			echo"<h3>Example Two</h3>";
	
			function info($name,$age)	//function with two arguments
			{

				echo"<p>Your name is $name. <br> And your age is $age.</p>";

			}
			
			info("hadi",22);
			info("Ali",20);


			echo"<h3>Example Three</h3>";

			function info1($name,$age,$sex="male")	//Defualt  arguments values
			{

				echo"<p>Your name is $name. <br> And your age is $age.<br>Gender is $sex</p>";

			}
			
			info1("Hadi",22,"Male");
			info1("Huda","21","female");
			info1("Ali",20);
			info1("Haniya",18,"female");
			info1("Taha",8);


			echo"<h3>Example Four</h3>";


				function sum($x, $y) 	//returing value
				{
							    
					  $z = $x + $y;
    					   return $z;
				}
						echo "The sum is ".sum(5, 10);
						 

					echo"<h3>Example five</h3>";

					function recursion($a)			//recursive function is a function that repeats itself
						{
    							if ($a <= 20) {
        						echo $a."<br>";
        						recursion($a + 1);
									}
						}
							recursion(10);




	?>