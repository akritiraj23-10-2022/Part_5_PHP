<?php
	for ($i = 0; $i < 12; $i++)
	{
		if ($i == 5)
		{
			echo("Loop continued at $i<BR>");
			continue;
		}
		if ($i == 10)
		{
			echo("Loop terminated at $i<BR>");
			break;
		}
		echo("Number $i<BR>");
	}
?>
