<?php

    class Bar extends Foo{
        /*Same function name as Foo Class
        but cannot be called because 
        Bar extends Foo, and foo already has 
        this method name */
        public function sayHello(){
            echo "<br>Hello from bar";
        }
        
    }

?>