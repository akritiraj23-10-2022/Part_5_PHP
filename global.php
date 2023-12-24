<?php
	$var1 = 85;
	$var2= 50;

	function MySum()
	{
		$GLOBALS["var2"] = 
				$GLOBALS["var1"] + $GLOBALS["var2"];
	} 

	MySum();
	echo “The Sum is:”, $var2;
?>
