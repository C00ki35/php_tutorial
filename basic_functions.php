<?php echo "This is it" ?>

<? 
    $myName = "Paul"; 
    echo $myName;

    $myArray = [89,99,77,65];
    echo " ".$myArray[2];

    $associateArray = array(
        "Dave" => 78,
        "Sally" => 77,
        "Ken" => 22
    );

    echo "Dave is " . $associateArray['Dave'];
    //last one off list
    array_pop($associateArray);
    
    //first one off list
    array_shift($associateArray);
    echo count($associateArray);

    print_r($associateArray)
?>


<?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
      } 
?>

<?php
    $count = 0;
    while($count <= 5){
        echo $count . "<br>";
        $count++;
    }
?> 

<?php

    $nickNames = ["Paul", "Simon", "John"];
    foreach ($nickNames as $nickName){
        echo $nickName . "<br>";
    }

    $prices = array(
        "Kettle" => 6,
        "Iron" => 12,
        "Computer" => 66
    );

    foreach($prices as $key => $price ){
        echo $key . " is £" . $price . "<br>";
    };


    function greet($userName, $age=55){
        echo strtoupper("Hello " . $userName . " " . $age);
    }

    greet('brad', 66);

    $myNum = 14;

    if($myNum == 140){
        echo "<br>Yes it is";
    } elseif($myNum == 14) {
        echo "<br>Oh no...";
    } else {
        echo "<br>NOPE!";
    }
?>

