//one section outlining foreach loops
<html>
  <head>
    <link rel="stylesheet" href="stylesheet.css" />
    <title>Codecademy Languages</title>
  </head>
  <body>
    <h1>Languages you can learn on Codecademy:</h1>
    <div class="wrapper">
      <ul>
        <?php
          $langs = array("JavaScript",
          "HTML/CSS", "PHP",
          "Python", "Ruby");

          foreach ($langs as $lang) {
              echo "<li>$lang</li>";
          }

          unset($lang);
        ?>
      </ul>
    </div>
  </body>
</html>

//another foreach loop example
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        $yardlines = array("The 50... ", "the 40... ",
        "the 30... ", "the 20... ", "the 10... ");
        // Write your foreach loop below this line
        foreach($yardlines as $line){
            echo $line;
        }

        // Write your foreach loop above this line
        echo "touchdown!";
      ?>
    </p>
  </body>
</html>
