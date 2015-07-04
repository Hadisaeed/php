	<?php

	//Associative arrays

		echo"<h1>Associative Arrays</h1>";
		
		echo"<h3>Example One</h3>";

		$price=array("php"=>"520", "JS"=>"550", "Html"=>"440" ); //declaring associative array
		echo "The Price of PHP is : " .$price["php"]; 		//accessing the element


		echo"<h3>Example Two</h3>";
		
		//Another way of declaring Associative Array


		$price=array();
		$price["Js"]=550;
		$price["Css"]=620;
		$price["php"]=520;
		echo "The Price Of Css Book is : " .$price["Css"] ."<br>";

		echo"<h3>Example Third</h3>";
		echo"<P>My Bio-Data Is</p>";
		$my_ary=array("Name"=>"Hadi", "Age"=>22, "Sex"=>"male", "Roll Number"=>172);
		foreach($my_ary as $key=>$value)
		{

			echo $key. "  Is  " .$value ."<br>";


		}
		 









	?>