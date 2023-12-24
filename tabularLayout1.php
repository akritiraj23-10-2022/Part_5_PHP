<HTML>
	<HEAD>
		<TITLE>Presenting Data In A Tabular Layout</TITLE>
	</HEAD>
	<BODY>
		<?php 
			$array = array('Andra Pradesh' => 'Hyderabad', 'Goa' => 'Panaji', 'Maharashtra' => 'Mumbai', 'West Bengal' => 'Calcutta', 'Rajasthan' => 'Jaipur');
			// Start the table
			echo "<TABLE Border='1'>";
			// Print the first row with headers

			echo "<TR>";
			echo "<TH>Countries</TH>";
			echo "<TH>Capitals</TH>";
			echo "</TR>";
			// Ensures that the each() function begins from the start:
			reset($array);

			while (list($key, $value) = each($array))
			{
				// Printing a single row
				echo "<TR>";
				echo "<TD>$key</TD>";
				echo "<TD>$value</TD>";
				echo "</TR>";
			}
			// Ending the table
			echo "</TABLE>";
		?>
	</BODY>
</HTML>
