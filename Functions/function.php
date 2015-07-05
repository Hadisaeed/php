


	<?php


		echo"<h1>Functions</h1>";
		echo"<h3>Example One</h3>";

		function Message()		//function declaration
		{

			echo"<p>Welcome to Php Programming</p>";	//function body
			
			

		}

		Message(); // function calling
	

		echo"<h3>Example One</h3>";

		$test=true;		// if $test value is true than function will execute 
		
			if($test){

					function foo()
					{

						echo"<p>I'M in Foo Function</p>";
				

					}


						foo();

			

			}

			else{

					echo"<p>I'm Not In Foo Function</p>";	
		
				}

			

		
				echo"<h3>Example Three</h3>";

			function test()				// nested function
					{



						function test2()
						{
						


							echo"<p>Test 2 function </p>";

						}
							test2 ();



					}


				test();






	?>