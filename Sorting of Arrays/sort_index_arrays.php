

	<?php

		echo"<h1>Sorting Of Arrays</h1>";
		echo"<h3>Sorting Of Index Arrays In Ascending Order</h3>";
		echo"<h4>Example One</h4>";
		$numbers=array(9,2,7,5,1,10);
		echo"<p>Before Sorting:</p>";
		for($a=0;$a<=5;$a++)
		{


			echo  $numbers[$a] ."<br>";


		}
		sort($numbers);
		echo"<p>After Sorting:<p>";
		for($a=0;$a<=5;$a++)
		{


			echo  $numbers[$a] ."<br>";


		}
		


	
		echo"<h4>Example Two</h4>";
			

		$alphabets=array("H","a","d","i","s","a","e","e","d");
		echo"<p>Before Sorting:</p>";
		$c=count($alphabets);			//here count is a function and its counts the elements in array.
		for($a=0;$a<$c;$a++)
		{

			echo  $alphabets[$a] ."<br>";
					
		
		}
		sort($alphabets);
		echo"<p>After Sorting: </p>";
		$c=count($alphabets);
		for($a=0;$a<$c;$a++)
		{

			echo  $alphabets[$a] ."<br>";
					
		
		}


		echo"<h3>Sorting Of Index Array In Decending Order</h3>";

		
		echo"<h4>Example Three</h4>";
		$numbers1=array(9,2,7,5,1,10);
		echo"<p>Before Sorting:</p>";
		for($a=0;$a<=5;$a++)
		{


			echo  $numbers1[$a] ."<br>";


		}
		rsort($numbers1);
		echo"<p>After Sorting:<p>";
		for($a=0;$a<=5;$a++)
		{


			echo  $numbers1[$a] ."<br>";


		}
		


	
		echo"<h4>Example Two</h4>";
			

		$alphabets1=array("H","a","d","i","s","a","e","e","d");
		echo"<p>Before Sorting:</p>";
		$c=count($alphabets1);
		for($a=0;$a<$c;$a++)
		{

			echo  $alphabets1[$a] ."<br>";
					
		
		}
		rsort($alphabets1);
		echo"<p>After Sorting: </p>";
		$c=count($alphabets1);
		for($a=0;$a<$c;$a++)
		{

			echo  $alphabets1[$a] ."<br>";
					
		
		}

	?>