<?php
	$numStr = "15.65 Rupees";
	$numDec = 10.54;

	$numInt = (int) $numStr;
	echo "After casting $numStr to Integer the result is " . $numInt ."<BR>";

	$numInt = (int) $numDec;
	echo "After casting $numDec to Integer the result is " . $numInt . "<BR>";
?>
