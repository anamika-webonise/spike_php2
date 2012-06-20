<?php

$con = mysql_connect('localhost','root','webonise6186');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db = mysql_select_db('anamika', $con);



$password=$_POST['password'];

$username=$_POST['username'];
		echo "before: ";
      echo $password;
      echo "<br>";
      echo "after: ";
		
		$salt = hash('sha256', uniqid(mt_rand(), true) . 'something random' . strtolower($username));
		
		$hash = $salt . $password;

	
		for ( $i = 0; $i < 100000; $i ++ )
		{
		    $hash = hash('sha256', $hash);
		}
		 
		
		$hash = $salt . $hash;
		
		echo "$hash";


?>