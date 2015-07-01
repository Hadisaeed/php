

<?php


	echo"<h3>Print Table of 5 Using For Loop</h3>";

	$a=5;
	for($i=1;$i<=10;$i++)
	{
	$b=$a*$i;
	echo "$a X $i = $b <br>" ;



	}


	echo"<h3>Print Table Of 5 In Reverse Order using Do-While Loop</h3>";


	$b=10;
	do
	{

	$c=$a*$b;
	echo "$a X $b = $c <br>" ;
	$b--;

	}
	while($b>=1);



?>