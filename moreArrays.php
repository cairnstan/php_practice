<html>
  <head>
    <title>Associate Arrays</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5);

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5);

        // This code will output "blue"...
        echo $myArray[1];
        echo '<br />';

        // ... and this will also output "blue"!
        echo $myAssocArray['colour'];
      ?>
    </p>
  </body>
</html>

//looping with associative arrays
<html>
  <head>
    <title>Iteration Nation</title>
  </head>
  <body>
    <p>
      <?php
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');

      // Looping through an array using "for".
      // First, let's get the length of the array!
      $length = count($food);

      // Remember, arrays in PHP are zero-based:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
      }

      echo '<br /><br />I want my salad:<br />';

      // Loop through an associative array using "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }

      echo '<br /><br />';

      // Create your own array here and loop
      // through it using foreach!
        $garden = array('garlic' => 'planted',
        'tomatos' => 'harvested',
        'raspberries' => 'growing');

        echo 'My garden has:<br />';

        foreach($garden as $crop=>$status) {
            echo $crop . ' ' . $status . '<br />';
        }

      ?>
    </p>
  </body>
</html>
