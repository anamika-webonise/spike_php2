<?php

interface A 
{     
	public function get_text(); 
}

class B implements A {
    public  function get_text() {
        echo "implements an interface";
    }
}
$intrface = new B();
$intrface->get_text();
?>
