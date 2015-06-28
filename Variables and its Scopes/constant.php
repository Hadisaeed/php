<?php


	echo"<h1>Constants</h1>";



/*

	Anything which can not change its value is called constant as the name suggest
	that the value can not change during the execution of the script

here's an example of constant

 use define keyword to define a constant.

*/



	define('EMAIL','Hidz2013@live.com'); // defining constant 
	echo EMAIL;


// it is considered best practice to define constant with only upper case name


	define('PIE','3.14');		// defining a constant value
	define('USERNAME','Hadi Saeed');	//defining constant username
	define('PASSWORD','ABC123');
	echo"<br>"; 
	echo PIE;
	echo"<br>";
	echo USERNAME;
	echo"<br>";
	echo PASSWORD;


?>