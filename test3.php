<?php //test3.php
    //Sets the username
    $Username = 'Fred Smith';
    //Prints out the username
    echo $Username;

    //space
    echo "<br>";
    
    //Sets the Current_user variable to the username above
    $Current_user = $Username;
    //Prints out the Current user
    echo $Current_user;

    echo "<br>";

    //Random
    $count = 17.5;
    echo $count;


    //Array
    $tictactoe = array(
        array("x","o","x"),
        array("o","o","x"),
        array("x","o"," "),);

    echo "<br>";
    echo $tictactoe[0][2];

    echo "<br>";
    $x = 10;
    echo("The value of X is ");
    if (++$x == 10) echo $x;
     else echo "...Sorry, x is not 10";
?>
