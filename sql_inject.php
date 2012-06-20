<?php

//echo"hi";
$con = mysql_connect('localhost','root','webonise6186');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db = mysql_select_db('anamika', $con);




$username=$_POST['username'];
$password=$_POST['password'];
echo $username;

$sql="INSERT INTO user (username,password)VALUES ('$username','$password');";


mysql_query($sql);


 $username = htmlspecialchars(stripslashes($username));
 $username = str_ireplace("script", "blocked", $username);
 $username= mysql_escape_string($username );

$result = mysql_query("SELECT Id,username,password FROM user where username='$username';");

//echo "$result";
//exit;

 
while($row = mysql_fetch_array($result))
  {
 // echo $row['id']. " " .$row['password']." ".$row['username'];
   echo "$row";
  //echo htmlspecialchars($row['Id'], ENT_QUOTES, 'UTF-8');
  echo "<br />";
  }

?>
