

	<?php



		echo"<h1>Indexed Arrays</h1>";

		echo"<h3>Example One</h3>";

		$books=array("Html","Js","Php","Css","Bootstrap");	//defining or declaring an array
		
		echo"<p>I like  $books[2]</p>"; // accessing 2 index element of an array



		echo"<h3>Example Two</h3>";



		//Another way of declaring an array is

		$books[0]="Php";
		$books[1]="JS";
		$books[2]="Css";
		$books[3]="Hmtl";
		$books[4]="Bootstrap";


		echo"<p>I Like $books[2]</p>"; //accessing an array

		echo"<h3>Example Third</h3>";



		$numbers=array(2,4,8,10,20,45,85,90);
		echo"<p>The number at 5<sup>th</sup> index is :  $numbers[5]</p>";

		
		// if you want to access all the elements in the array than use loop as shown below

		echo"<h3>Example Four</h3>";

		$name=array("Huda", "Kinza" , "Tooba", "Haniya", "Mehak"); // declaring an array

		for($a=0;$a<5;$a++)	// accessing an array using for loop.
		{

			echo"<p>$name[$a]</p>";


		}

	

		// you can also access an array using foreach loop


		// foreach loop is used to loop through array

		/*syntax

				foreach(array as value)
				{

					code to be executed;

				}

				*/



			echo"<h3>Example Five</h3>";



			$countires=array("Pakistan","UK", "China","America");
			
			foreach($countires as $value)		// accessing array using foreach Loop
			{

				echo"<p>$value</p>";
			

			}



		echo"<h3>Example six</h3>";


		//Mixed Array

		$mx_ary=array(1,"Hadi",true,"2",false);
		
		echo"<p>$mx_ary[1]</p>";
		echo"<p>$mx_ary[3]</p>";

		print_r($mx_ary);
		
		echo"<br>";

		var_dump($mx_ary[3]);	// checking the type of index third value

		echo"<br>";


		var_dump($mx_ary);


		echo"<h3>Example Seven</h3>";


		$my_ary=array("Hadi","Tooba", "Haniya");
		print_r($my_ary);
		echo"<br>";
		echo $my_ary[0];
		echo"<br>";
		echo $my_ary[1];
		echo"<br>";
		echo $my_ary[2];
		echo"<br>";
		$my_ary[3]="Umer";
		echo $my_ary[3];
		echo"<br>";
		$my_ary[4]="Nida";
		echo $my_ary[4];
		echo"<br>";
		$my_ary[1]="Huda";
		echo$my_ary[1];
		echo"<br>";
		print_r($my_ary);
		echo"<br>";
		

		










	?>