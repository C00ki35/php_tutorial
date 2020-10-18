<?php

class User{
    public static $minPassLength = 5;
    public static function validatePassword($password){
        if(strlen($password) >= self::$minPassLength){
            return true;
        } else {
            return false;
        }
    }
}

$password = "passingover";


/*
Static methods allow methods to be accessed without
instantiation
*/

//No instantiation of class - just access method
//directly with the :: operator
if(User::validatePassword($password)){
    echo 'Password is valid';
} else {
    echo 'Password NOT valid';
}

//attributes can also be accessed without instantiation
echo User::$minPassLength;