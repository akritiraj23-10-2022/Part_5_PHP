<?php
	$var1 = 85;
	$var2 = 50;

	function MySum()
	{
		global $var1, $var2;
		$var2 = $var1 + $var2;
	} 
	MySum();
	echo “The Sum is:”, $var2;
?>
