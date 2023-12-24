<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ivan Bayross</title>
</head>

<BODY STYLE="background-color:#00FFFF; color:red;">
	<?php 
		$websites  = array("Creating Website using HTML", "Creating Website using PHP", "Creating Website using Wordpress", "Creating Website using Joomla"); 
		$item = rand(0, sizeof($websites )-1);
	?>
	
	<h1>
		<?php echo $websites [$item] ?>
	</h1>
</body>
</html>
