<?php


//echo "hi";

$con = mysql_connect('localhost','root','webonise6186');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db = mysql_select_db('anamika', $con);




class A{

function xss(){

echo '<div>

<br>
<u>Add your comments here:<u><br><br>
<form method="POST" action="xss.php"> 
<textarea cols="40" rows="5" name="comment"></textarea><br>
<input type="submit" value="Add"/>
</form>
</div>';


}




function sql_injection(){
	echo'<div id="login">

<table id="login_tbl">
<br>
<u>Login here:</u><br><br>
<form method="post" action="sql_inject.php" >
<tr>
		<td>User Name:</td>
		<td><input type="text" name="username" id="username"></td>
</tr>
<tr>
		<td>Password:</td>
		<td><input type="text" name="password" id="password"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="submit"></td>
</tr>
</form>
</table>

</div>';





}



function csrfAtk(){
	

		echo'<div id="login">

<table id="login_tbl">
<br>
<u>Login here:</u><br><br>
<form method="post" action="csrf.php">
<tr>
		<td>User Name:</td>
		<td><input type="text" name="username" id="username"></td>
</tr>
<tr>
		<td>Password:</td>
		
		<td><input type="text" name="password" id="password"></td>
		<td><input type="hidden" name="csrf_token" value="<?php echo $token; ?>"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="submit"></td>
</tr>
</form>
</table>

</div>';
	
       
}


function fileupload(){
	
	
     echo' <form action="upload_files.php" method="post" enctype="multipart/form-data">
            <label for="file">Filename:</label>
            <input type="file" name="file" id="file" /> 
            <br />
            <input type="submit" name="submit" value="Submit"/>
    </form>';
    

    
    
}



function including_files(){
echo' <form method="get" action="include_files.php">
   Select Profession:<select name="stream">
      <option value="computer">computer</option>
      <option value="science">science</option>
      <option value="arts">arts</option>
   </select>
   <input type="submit" name ="include" value="Submit">
</form>';
	

}

function eval_attack(){

$name='anamika';
	$sql='delete * from user where username=$name';
	echo $sql;
	echo "<br>";
	$str=eval("\$sql = \"$sql\";");

	echo $sql;

}



function register_globals()
 { 
 
 
}



function magic_quotes(){

		
		echo "<form method='post' action='magic_cots.php'>
		Question: <input type='text' name='question'/><br />
		<input type='submit'>

		</form>";
}
	
	
	
function plain_text_password(){

		echo'<div id="login">

<table id="login_tbl">
<br>
<u>Login here:</u><br><br>
<form method="post" action="plain_pass.php">
<tr>
		<td>User Name:</td>
		<td><input type="text" name="username" id="username"></td>
</tr>
<tr>
		<td>Password:</td>
		<td><input type="text" name="password" id="password"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="submit"></td>
</tr>
</form>
</table>

</div>';


 
	}
}

$obj=new A();
echo "<a href='http://localhost/spikenew/index.php?num=xss'>xss</a>";
if($_GET['num']=="xss"){
	$obj->xss();
}
echo "<br>";
echo "<a href='http://localhost/spikenew/index.php?num=sql_injection'>sql_injection</a>";
if($_GET['num']=="sql_injection"){
	$obj->sql_injection();
}
echo "<br>";


echo "<a href='http://localhost/spikenew/index.php?num=including_files'>including_files</a>";
if($_GET['num']=="including_files"){
	$obj->including_files();
}
echo "<br>";

echo "<a href='http://localhost/spikenew/index.php?num=eval_attack'>eval_attack</a>";
if($_GET['num']=="eval_attack"){
	$obj->eval_attack();
}
echo "<br>";

echo "<a href='http://localhost/spikenew/register_global.php'>register_globals</a>";
if($_GET['num']=="register_globals"){
	$obj->register_globals();
}
echo "<br>";

echo "<a href='http://localhost/spikenew/index.php?num=magic_quotes'>magic_quotes</a>";
if($_GET['num']=="magic_quotes"){
	$obj->magic_quotes();
}
echo "<br>";



echo "<a href='http://localhost/spikenew/index.php?num=plain_text_password'>plain_text_password</a>";
if($_GET['num']=="plain_text_password"){
	$obj->plain_text_password();
}
echo "<br>";


echo "<a href='http://localhost/spikenew/index.php?num=csrfattack'>csrfattack</a>";
if($_GET['num']=="csrfattack"){
	$obj->csrfAtk();
}
echo "<br>";


echo "<a href='http://localhost/spikenew/index.php?num=fileupload'>fileupload</a>";
if($_GET['num']=="fileupload"){
	$obj->fileupload();
}
echo "<br>";


?>


