<?php 

/*
program to print different kinds of patterns
*/

// pattern 1
for ($i = 0; $i < 5; $i++) { 
	for ($j = 0; $j <= $i; $j++) { 
		echo " * ";
	}
	echo "<br>";
}
echo "<br>";

// pattern 2
for ($i = 0; $i < 5; $i++) { 
	for ($j = $i; $j < 5; $j++) { 
		echo " * ";
	}
	echo "<br>";
}
echo "<br>";

// pattern 3
for ($i = 0; $i < 5; $i++) { 
	for ($j = 0; $j <= $i; $j++) { 
		echo $j;
	}
	echo "<br>";
}
echo "<br>";

// pattern 4
for ($i = 0; $i < 5; $i++) { 
	for ($j = 0; $j <= $i; $j++) { 
		echo $i;
	}
	echo "<br>";
}
echo "<br>";

// pattern 5
for ($i = 0; $i < 5; $i++) { 
	for ($j = 0; $j <= 5; $j++) { 
		echo " * ";
	}
	echo "<br>";
}
echo "<br>";

// pattern 6
for ($i = 0; $i < 5; $i++) { 
	for ($j = 0; $j <= $i; $j++) { 
		echo "&nbsp&nbsp&nbsp";
	}
	for ($k = $i; $k < 5; $k++) { 
		echo " * ";
	}
	echo "<br>";
}
echo "<br>";

// pattern 7
for ($i = 0; $i < 5; $i++) { 
	for ($j = $i; $j < 5; $j++) { 
		echo "&nbsp&nbsp&nbsp";
	}
	for ($k = 0; $k <= $i; $k++) { 
		echo ' * ';
	}
	echo "<br>";
}
echo "<br>";

// pattern 8
for ($i = 0; $i < 5; $i++) { 
	for ($j = $i; $j < 5; $j++) { 
		echo "&nbsp&nbsp&nbsp";
	}
	for ($k = 0; $k <= $j; $k++) { 
		echo " * ";
	}
	echo "<br>";
}
echo "<br>";

// pattern 9
for ($i = 0; $i < 5; $i++) { 
	for ($j = $i; $j < 5; $j++) { 
		echo "&nbsp&nbsp&nbsp";
		for ($k = $j; $k < 5; $k++) { 
			echo ' * ';
		}
		echo '<br>';
	}
	//echo '<br>';
}
echo "<br>";

// pattern 10
for ($i = 0; $i < 5; $i++) { 
	for ($j = 0; $j <= $i; $j++) { 
		echo "&nbsp&nbsp&nbsp";
		for ($k = $j; $k < 5; $k++) { 
			echo ' * ';
		}
		echo '<br>';
	}
}
echo "<br>";
?>