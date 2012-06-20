<?php

$con = mysql_connect('localhost','root','webonise6186');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db = mysql_select_db('anamika', $con);


//checking for magic quotes setting on OR off.
		if(get_magic_quotes_gpc())
			echo "Magic quotes are enabled";
		else
			echo "Magic quotes are disabled";
		echo "<br>";
		

		echo stripslashes($_POST['question']);


?>