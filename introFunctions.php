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

<!-- combining simple functions -->
<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
     $loves = array();
    array_push($loves, "elliot");
    array_push($loves, "anna");
    array_push($loves, "alexis");
    array_push($loves, "jaime");
    array_push($loves, "jess");
    array_push($loves, "markie");
    array_push($loves, "matt");
    array_push($loves, "dan");
    array_push($loves, "kevin");
    array_push($loves, "brooke");
    array_push($loves, "leon");
	count($loves);
	// Sort the list
	//print $loves[rand(0,10)];
    sort($loves);

    //print join( ", ", $loves);
	// Randomly select a winner!
    $chosenOne = $loves[rand(0, 10)];
    print $chosenOne;
	// Print the winner's name in ALL CAPS
	$capsName = strtoupper($chosenOne);
	print $capsName;
	?>
	</p>
</html>
