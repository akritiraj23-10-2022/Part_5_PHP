<?php

		$dayofweek=date("D");

		echo "Hello Everyone ";

		if ($dayofweek=="Monday")
		{
			print "Today is Monday, starting of a new week.";	
		}
		elseif ($dayofweek=="Tues")
		{
			print "Today is Tuesday.";
		}
		elseif ($dayofweek=="Wed")
		{
			print "Today is Wednesday.";
		}
		elseif ($dayofweek=="Thur")
		{
			print "Today is Thurday.";
		}
		elseif ($dayofweek=="Fri")
		{
			print "Today is Friday, starting of a weekend.";
		}
		elseif ($dayofweek=="Sat")
		{
			print "Today is Saturday.";
		}
		else
		{
			print "Today is Sunday.";
		}
	?>
