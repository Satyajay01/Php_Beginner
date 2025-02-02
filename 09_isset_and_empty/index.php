<?php
/*

    ##isset() 
    Return TRUE, if a variable is declared and not null

    ##empty()
    Return TRUE, if a variable is not declared, false, null, ""
    */


    // isset() -----------------

    $name = "Satyajay";
    // $name = null;
    // echo isset($name);

    if (isset($name)) {
        echo "Name is SET";
    }
    else{
        echo "Name is Empty";
    };

        echo "<br>";



        
    //empty()------------------
    // $myname = "Satyajay";
    $name;
    // echo empty($name);

    if (empty($myname)) {
        echo "Name is Empty";
    }
    else{
        echo "Name is SET";
    };


    
