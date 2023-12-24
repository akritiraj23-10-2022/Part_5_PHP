<?php
	$staff [0][0] = "Ivan";
	$staff [0][1] = "Kavita";
	$staff [1][0] = "Ganesh";
	$staff [2][0] = "Meher";
	$staff [2][1] = "Tabrez";
	$staff [3][0] = "Prerna";
	$ctr1 = 0;
	foreach ($staff as $value1)
	{
		$ctr2 = 0;
		foreach ($value1 as $value2)
		{
		echo "Value held in position $ctr1 segment $ctr2 is: $value2<BR>";
			$ctr2++;
		}
		$ctr1++;
	}
?>
