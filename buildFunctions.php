<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
            function greetings($name){
                echo "Greetings, " . $name . "!";
            }
            greetings("Cari Tan");
        ?>
      </p>
    </body>
</html>


<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
        function aboutMe($name, $age){
            echo "Hello! My name is " . $name . ", and I am " . $age . " years old.";
        }

        aboutMe("Cari", 33);
        ?>
      </p>
    </body>
</html>
