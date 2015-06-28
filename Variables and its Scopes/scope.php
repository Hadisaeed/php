

<?php



	echo"<h1>Scope of variables</h1>";
	echo"<h3>Global Scope</h3>";

	$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";


	echo"<h3>Local scope</h3>";


function myTest1() {
    $z = 5; // local scope
    echo "<p>Variable z inside function is: $z</p>";
} 
myTest1();

// using z outside the function will generate an error
echo "<p>Variable z outside function is: $z</p>";


	echo"<h3>Global Keyword</h3>";

	
$num1 = 5;
$num2 = 10;

function myTest2() {
    global $num1, $num2;
     $num2= $num1 + $num2;
}
myTest2();
echo $num2; // outputs 15


echo"<h3>static Keyword</h3>";


function myTest3() {
     static $c = 0;
    echo "$c<br>";
    $c++;
	
}

myTest3();
myTest3();
myTest3();


?>