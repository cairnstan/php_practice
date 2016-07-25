<html>
  <head>
    <title>Modifying Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");

        // Write the code to modify
        // the $languages array!
        $languages[2] = "Elm";
        echo $languages[2];
      ?>
    </p>
  </body>
</html>


<html>
  <head>
    <title>Modifying Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        // Write the code to remove Python here!


        unset($languages[3]);
        // Write your code above this line. Don't
        // worry about the code below just yet; we're
        // using it to print the new array out for you!

        foreach($languages as $lang) {
          print "<p>$lang</p>";
        }
      ?>
    </p>
  </body>
</html>
