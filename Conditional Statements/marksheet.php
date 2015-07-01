<?php

	echo"<h1>Marksheet</h1>";
	echo"<h3>Subjects</h3>";
	$html=85;
	$css=65;
	$php=65;
	$js=72;
	$bootstrap=68;

	$obt=$html+$css+$php+$js+$bootstrap;
	$percent=($obt/500)*100;
	


	echo"<p>Marks obtained in HTML is :$html</p>";
	echo"<p>Marks obtained in CSS is :$css</p>";
	echo"<p>Marks obtained in PHP is :$php</p>";
	echo"<p>Marks obtained in JS is :$js</p>";
	echo"<p>Marks obtained in Bootstrap is :$bootstrap</p>";
	
	echo"<p>Total Obtained Marks is: $obt</p>";
	echo"<p>Out Of 500</p>";
	echo"<p>Your Percentage is: $percent</p>";

	if($percent>=80){

	echo"<p>Your grade is \"A+\"</p>";

	}
	
	else if($percent>=70)
	{

	echo"<p>Your grade is \"A\"</p>";

	}

	else if($percent>=60)
	{

	echo"<p>Your grade is \"B\"</p>";

	}



	else if($percent>=50)
	{

	echo"<p>Your grade is \"C\"</p>";

	}

	else{


	echo"<p>You are Fail</p>";
	}




?>