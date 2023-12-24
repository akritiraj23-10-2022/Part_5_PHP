<?php
	$a = 400;
	$b =& $a;
	print "The value of a is " . $a . "<BR>";
	print "The value of b is " . $b . " <BR>";

	++$a;
	print "The increment value of a is " . $a . "<BR>";
	print "The increment value of b is " . $b . "<BR>";

	++$b;
	print "The increment value of a is " . $a . "<BR>";
	print "The increment value of b is " . $b . "<BR>";
?> 
