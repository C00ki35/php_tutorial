<?php
class People {
    public $personOne = "Mike";
    public $personTwo = "John";
    public $personThree = "Simon";
    protected $personFour =  "Alan";
    private $personFive = "Ken";

    function iterateObject(){
    foreach($this as $key => $value){
        print "$key => .' '. $value\n";
        }
    }
}

$people = new People;
/*This will show everybody because the 
method is within the class */
$people->iterateObject();

echo "<br><br>";

/*This is outside the class so the private
and protected attributes will not show. */
foreach($people as $key => $value){
    print "$value\n";
}

?>