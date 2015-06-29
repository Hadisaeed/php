


<?php


/*	Increment/ Decrement Operators

	Pre-increment:


for example
++$s;


it increments s by one then assign the value to variable

	Post increment:
for example
$s++


Assigns the value to the variable than increment by one



*/
	

	echo"<h3>Pre Increment</h3>";
	$x=10;
	echo"<br>x is: $x";
	$y= ++$x;		//pre increment
	echo"<br> y is :$y";



	echo"<h3>Post Increment</h3>";
	$x=10;
	echo"<br>x is: $x";
	$y= $x++;		//post increment
	echo"<br> y is :$y";



	
	echo"<h3>Pre Decrement</h3>";
	$x=10;
	echo"<br>x is: $x";
	$y= --$x;		//pre decrement
	echo"<br> y is :$y";



	echo"<h3>Post Decrement</h3>";
	$x=10;
	echo"<br>x is: $x";
	$y= $x--;		//post decrement
	echo"<br> y is :$y";



	
	echo"<h3>Another Example</h3>";
	$a=15;
	$b=25;
	$c=($a++)+(--$b);
	echo"<br>c is : $c";



/*

	Some practice exercise 
	try yourself and answer it
	$a=15;
	$b=25;
	$c=(++$a)+(--$b);
	$c=(++$a)+(++$b);
	$c=($a++)+(--$b);
	$c($a++)+(++$b);
	$c(--$a)-(--$b);
	$c(--$a)+(--$b);
	$c($a--)+($b--);
	$c($a--)+(--$b)



*/




	
?>