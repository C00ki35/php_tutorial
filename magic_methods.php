<?php

 class Post{

    private $name;
    //Sets the value of a private attribute
    
    public function __set($name, $value){
        echo "Setting " . $name . " to " . $value;
        $this->name = $value;
    }

    //Gets the value of a private attribute
    public function __get($name){
        echo "<br>Getting " . $name . " - " . $this->name;
    }

    public function __isset($name){
        echo '<br>Is ' . $name . ' set?';
        return isset($this->name);
    }
 }



$post = new Post;
//sets the private variable
$post->name = "Testing";
//gets the private variable
echo $post->name;
//sees if the variable is set
var_dump(isset($post->name));
?>