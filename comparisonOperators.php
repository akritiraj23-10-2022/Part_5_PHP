<?php
		$number1 = 80; 
		$number2 = 90;
		$number3 = '80';
		If ($number1 < $number2)
		{
			echo $number1 . " is less than " . $number2 . "<BR>";
		}

		If ($number1 == $number3)
		{
			echo $number1 . " is equal to " . $number3 . "<BR>";
		}
		If ($number1 === $number3)
		{
			echo $number1 . " is identical to " . $number3 . "<BR>";
		}

		If ($number2 !== $number3)
		{
			echo $number2 . " is not identical to " . $number3;
		}
	?>
