<?php

$con = mysql_connect('localhost','root','webonise6186');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db = mysql_select_db('anamika', $con);


	
	session_start();
       require_once('nocsrf.php');
       $token = NoCSRF::generate( 'csrf_token' );
	
	 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           try
                {
                    // Run CSRF check, on POST data, in exception mode, with a validity of 10 minutes, in one-time mode.
                    NoCSRF::check( 'csrf_token', $_POST, true, 60*10, false );
                 
                }
                catch ( Exception $e )
                {
                    echo "CSRF attack detected";
                }   
                }



?>