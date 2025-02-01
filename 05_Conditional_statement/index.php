<?php
    /*
    (1) if else statement
    (2) case statement
    */
    
    // if else statement------------
    echo" if else Statement-------------<br>";
    $a = 5;
    $b = 10;

    if($a==$b){
        echo "a is equal to b";
    }
    else{
        echo "a is not equal to b";
    }

    // case statement---------------
    echo "Case statement---------------<br>";

    $favcolor = "green";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
  }


?>