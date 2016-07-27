<!-- basic math functions -->
<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
    print rand();
    ?>
    </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    $name = "cari tan";
    $nameLength = strlen($name);

    $randSec = substr($name, rand(0, 7), rand(0,7));
    print $randSec;
    ?>
    </p>
</html>

<!-- sorting arrays -->
<html>
    <p>
	<?php
	// Create an array with several elements in it,
	// then sort it and print the joined elements to the screen
     $cheese = array("manchego", "munster", "jarlsberg", "mozzarella", "parmesean");
    sort($cheese);
    print join( ", ", $cheese);
	?>
	</p>
	<p>
	<?php
	// Reverse sort your array and print the joined elements to the screen
	rsort($cheese);
	print join( ", ", $cheese);
	?>
	</p>
</html>
