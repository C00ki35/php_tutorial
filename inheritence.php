<?php
class First{
    public $id = 23;
    protected $name = 'John Doe';
    public function saySomething($word){
        echo 'Something ...' . $word;
    }
};

class Second extends First{
    //Although the $name is protected in the 
    //other function this extends the first class
    //and therefore has access through the $this-> 
    public function getName(){
        echo $this->name;
    }
};

$second = new Second;
echo $second->getName();

?>