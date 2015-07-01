

<?php

	echo"<h1>Example 1</h1>";


	$mark=25;
	if($mark>40)
	{
	echo"<p>Your Marks is :$mark</P>";
	echo"<p>Your are Pass!!!</p>";	

	}

	else
	{
	
	echo"<p>Your Marks is :$mark</P>";
	echo"<p>Your are fail!!!</p>";

	}



	
	echo"<h1>Example 2</h1>";


	$salary =12550;
	
	echo"<p>Your Salary is: $salary</p>";

	$as = $salary * 12;
	
	echo"<p>Your Annual Salary is:$as</p>";
	
	if($as >= 250000)
	{

	echo"<p>Tax will Dedected</p>";

	}
	

	else
	{

	echo"<p>No Tax will Dedect</p>";

	}
?>