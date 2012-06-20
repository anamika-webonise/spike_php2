<?php

$con = mysql_connect('localhost','root','webonise6186');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db = mysql_select_db('anamika', $con);



$sql="INSERT INTO comments VALUES ('$_POST[comment]');";
//echo "$_POST['comment']";

mysql_query($sql);

//echo "$sql";
//exit;

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }



$result = mysql_query("SELECT * FROM comments;");

//echo "$result";
//exit;

while($row = mysql_fetch_array($result))
  {
  	
  	echo $row['comments'];
 
  //echo $row['cmt'];
  echo htmlspecialchars($row['comments'], ENT_QUOTES, 'UTF-8');
  echo "<br />";
  }
  ?>