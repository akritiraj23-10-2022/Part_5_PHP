<?php
	$num1 = 5;
	$num2 = $num1++;
	// Post increment, $num2 is assigned $num1's original value
	print "The first number is " . $num1 . "<BR />"; 
	// This will print the value of $num1, which is now 6
	print "The second number is " . $num2 . "<BR />"; 
	// This will print the value of $num2, which is the original value of $num1 i.e. 5 $num3 = 5;
	$num4 = --$num3;
	// Pre decrement, $num4 is assigned $num3's incremented value
	print "The third number is " . $num3 . "<BR />"; 
	// This will print the value of $num3, which is now 4
	print "The fourth number is " . $num4; 
	// This will print the value of $num4, which is same as the value of $num3 i.e. 4
?>
