<html>
<body>
<?php
  $b = 5;          // variable base with value
  $h = 10;         // variable height with value
$area = ($b * $h)/2;  
  $area = number_format($area, 2); // rounded the area 
    
    echo '<p> The area of the triangle is <strong>' . $area .
    '</strong></p>';   //display the area with ng concatenation.

    $MY_NAME = 'Namdeep Kaur' ;
    
    $MY_NAME = strtoupper($MY_NAME); //convert to uppercase letters
    
    echo '<p> My first name is <strong>' . $MY_NAME . '</strong></p>'    // display the name in uppercase
    
 ?>   
   
</body>
</html>