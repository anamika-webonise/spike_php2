<?php




$con = mysql_connect('localhost','root','webonise6186');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db = mysql_select_db('anamika', $con);



$pr = 'computer';
   if (isset( $_GET['stream'] ) )
  {    $pr = $_GET['stream'];
    include( $pr . '.php' );
   //echo include( $pr . '.php' );
   echo "File Included";
}
else 
echo "File Include Attack";


?>