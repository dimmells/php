#!/usr/bin/php
<?php
	echo "Enter a number: ";
	while (fscanf(STDIN, "%s", $input))
	{
		$i = 0;
		if ($input == "")
			echo "'".$input."' is not a number\n";
		else {
			if (is_numeric($input)) {
				echo "The number ".$input." ";
				if ($input % 2 == 0)
					echo "is even\n";
				else
					echo "is odd\n";
			}
			else
				echo "'".$input."' is not a number\n";
		}
		echo "Enter a number: ";
		$input = "";
	}
	echo "\n";
?>
