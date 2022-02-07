<?php
    echo "<h1> Task Two </h1>";
    echo "<p>The exercises in page 44 and 45</p>";

    // 1
    $n = "do your task";
    echo "1) " . $n . "<br>";

    // 2
    echo "2) " . strlen("what is your name?") . "<br>";

    // 3
    echo "3) " . str_word_count("my name is farah") . "<br>";

    // 4
    echo "4) " . strrev("my name is farah") . "<br>"; 

    // 5
    echo "5) " . strpos("welcome to my task page", "task") . "<br>";

    // 6
    echo "6) " . str_replace("Moath", "sara", "this is farah page") . "<br>";

    // 7 
    define("name", "moath"); 
    $name = "sara";
    echo "7) " . name;


?>