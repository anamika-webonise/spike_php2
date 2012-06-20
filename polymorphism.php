<?php

class A{

    function disp(){

        echo "Inside the Base class<br/>";
    }
}

class B extends A{

    function disp(){
	
        A::disp();

        echo "Inside the Child class<br/>";
    }
}



$obj=new B();

$obj->disp();


?>
