<?php


abstract class A
{
    function get_info() {	
	      return "anamika co ltd";
	}
	abstract function get_text();
	}
	
	class B extends A
	{
		public function get_text() {	
				return "it is a stormy night..";		
		}	
		
		}

$a=new B();
echo $a->get_info()."<br>";
echo $a->get_text();



?>
