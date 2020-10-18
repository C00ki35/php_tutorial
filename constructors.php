<?php

class User{

    //PROPERTIES
    private $id;
    private $username;
    private $email;
    private $password;


    //METHODS
    //Automatically runs at start
    //Sets up default values at instantiation
    public function __construct($username,$password,$id,$email){
        $this->username = $username;
        $this->id = $id;
        echo "You have now created " . $this->username . " his ID is: " . $this->id;
    }

    public function register(){
        echo "<br> Hello " . $this->username;
    }

    public function login($username, $password){
        $this->username = $username;
        $this->password = $password;
        $this->AuthUser();
    }

    public function AuthUser(){
        echo "<br>" . $this->username . " is authenticated";
    }
    //Automatically runs at end of script
    public function __destruct(){
       // echo "Destructor Called";
    }


}


$myPerson = new User('Simon', 2323, 66, 'pgcwork@gmail.com');
$myPerson->register();



?>