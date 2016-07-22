<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
       $i = 8;
      switch($i):
          case 0:
           echo "0";
           break;
          case 1:
              echo "1";
              break;
          case 2;
          case 4;
          case 8:
              echo "The magic number";
              break;
        endswitch;
    ?>
	</body>
</html>
