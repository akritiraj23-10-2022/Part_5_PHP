<HTML>
	<HEAD>
		<TITLE>Tabular Layout</TITLE>
	</HEAD>
	<BODY>
		<?php 
			$arryFruitName = array('Apple' => 'Rs. 35/-', 'Appricot' => 'Rs. 45/-', 'Mango' => 'Rs. 150/-', 'Watermelon' => 'Rs. 75/-', 'Banana' => 'Rs. 20/-' ,'Grapes' => 'Rs. 30/-' , 'Grapefruit' => 'Rs. 40/-');
			// Start the table
			echo "<TABLE Width='50%' Border='1', cellpadding='1', cellspacing='5'>";
			// Print the first row with headers
			echo "<TR>";
			echo "<TH>Fruit's Name</TH>";
			echo "<TH>Price</TH>";
			echo "</TR>";
			// Ensures that the each() function begins from the start:
			reset($arryFruitName);

			while (list($key, $value) = each($arryFruitName))
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
