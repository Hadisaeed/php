

<?php


	$a=25;
	$b=2.5;
	$c="Hello";
	$d=true;
	$e=array(1,2,3.5,true,"Php");
	
	var_dump($a);
	echo"<br>";
	var_dump($b);
	echo"<br>";
	var_dump($c);
	echo"<br>";
	var_dump($d);
	echo"<br>";
	var_dump($e);
	echo"<br>";

// The php var_dump function return data type and value

// is_numeric function checks the type of variable is nmueric or not if a variable is numeric it returns 1.
/*
	$f=is_numeric($a);
	echo $f;
	echo"<br>";
	$g=is_numeric($b);
	echo $g;
	echo"<br>";
*/



// is_int function checks the type of variable is int or not if a variable is int it returns 1.

	/*$f=is_int($a);
	echo $f;
	echo"<br>";
	$g=is_int($b);
	echo $g;
	echo"<br>";

*/


// is_bool function checks the type of variable is boolean  or not if a variable is boolean it returns 1.

/*	$f=is_bool($a);
	echo $f;
	echo"<br>";
	$g=is_bool($d);
	echo $g;
	echo"<br>";

*/




// is_array function checks the type of variable is array or not if a variable is array it returns 1.
// is_string function checks the type of variable is string or not if a variable is string it returns 1.




	$f=is_array($e);
	echo $f;
	echo"<br>";
	$g=is_string($c);
	echo $g;
	echo"<br>";








?>