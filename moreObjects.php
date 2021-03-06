<html>
  <head>
    <title>Class and Object Methods</title>
  </head>
  <body>
    <p>
      <?php
        class Person {
          public $isAlive = true;

          function __construct($name) {
              $this->name = $name;
          }

          public function dance() {
            return "I'm dancing!";
          }
        }

        $me = new Person("Shane");
        if (is_a($me, "Person")) {
          echo "I'm a person, ";
        }
        if (property_exists($me, "name")) {
          echo "I have a name, ";
        }
        if (method_exists($me, "dance")) {
          echo "and I know how to dance!";
        }
      ?>
    </p>
  </body>
</html>

//Inherting and over riding parent class elements
<html>
  <head>
    <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
       class Vehicle {
          public function honk() {
            return "HONK HONK!";
          }
        }
        // Add your code below!
        class Bicycle extends Vehicle {
            public function honk() {
               return "Beep beep!";
            }
        }

        $bicycle = new Bicycle();
        echo $bicycle->honk();
      ?>
    </p>
  </body>
</html>

//static instances in classes
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        class King {
          // Modify the code on line 10...
          public static function proclaim() {
            echo "A kingly proclamation!";
          }
        }
        // ...and call the method below!
        King::proclaim();
      ?>
    </p>
  </body>
</html>

//combines several methods
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person {
        public static function say() {
         echo "Here are my thoughts!";
        }
      }
        class Blogger extends Person {
            const cats = 50;

        }

        Blogger::say();
        echo Blogger::cats;
      ?>
    </p>
  </body>
</html>
