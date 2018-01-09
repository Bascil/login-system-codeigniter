<?php
      error_reporting(0);

       $value1 = $_POST['value1'];
       $value2 = $_POST['value2'];

       function arithmetic($a = 0, $b = 0, $result=""){
          $result=$a + $b;
          return $result;
       }
      
?>


<html>
       <title>Web Service</title>
       <body>
              <form action="test.php" method="post">
                     <input type="text" name="value1" value="0" />
                     <input type="text" name="value2" value="0" />
                     <input type="submit" value="Calculate values"/>
              </form>
              Answer : <?php echo arithmetic($value1+$value2); ?>
       </body>
</html>