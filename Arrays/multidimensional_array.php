

	<?php

		echo"<h1>Multi-Dimensional Arrays</h1>";

		echo"<h3>Example one</h3>";
		$shop=array(				//declaring multidimensional array


			"laptop" => array
			(
			"Hp",
			"Dell",
			"IBM"
			),
			"printer" => array
			(
			"Hp",
			"Canon"
			)

			
				);		//closing of main array




			echo $shop["laptop"][1];
			echo"<br>";
			echo$shop["printer"][0];


			echo"<h3>Example Two</h3>";
			
			$my_ary=array(array(2,4,6),array(3,6,9),array(10,20,15));
			echo"Element of Sub Array 3 :  ".$my_ary[2][2];
			echo"<br>";
			echo"Element of Sub Array 2 :  ".$my_ary[1][0];
			echo"<br>";
			echo"Element of Sub Array 1 :  ".$my_ary[0][2];
		

			echo"<h3>Example Three</h3>";
			$my_ary2=array(array("Name"=>"Hadi","Age"=>22,"city"=>"Karachi"),
			array("Insitute"=>"SSUET","Roll Number"=>172,"Email"=>"hidz2013@live.com"),
			array("GPA"=>3.3,"Remarks"=>"Excellent"));
			echo "Name Is  " .$my_ary2 [0]["Name"];
			echo"<br>";
			echo "Email Is  " .$my_ary2 [1]["Email"];
			echo"<br>";
			echo "Age Is  " .$my_ary2 [0]["Age"];
			echo"<br>";
			echo "City Is  " .$my_ary2 [0]["city"];
			echo"<br>";
			echo "GPA Is  " .$my_ary2 [2]["GPA"];
			echo"<br>";



	?>