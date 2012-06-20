<?php

$con = mysql_connect('localhost','root','webonise6186');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db = mysql_select_db('anamika', $con);



if (ini_get('register_globals')) {
        $array = array('_REQUEST', '_FILES');
        foreach ($array as $value) {
            if(isset($GLOBALS[$value])){
                foreach ($GLOBALS[$value] as $key => $var) {
                    if (isset($GLOBALS[$key]) && $var === $GLOBALS[$key]) {
                        //echo 'found '.$key.' = '.$var.' in $'.$value."\n";                    
                        unset($GLOBALS[$key]);
                    }
                }
            }
        }
    }

echo "hi";

?>