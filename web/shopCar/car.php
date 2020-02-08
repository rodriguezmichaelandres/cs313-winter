<?php 
//session_start();

//print_r($_SESSION);
echo "before";

if(isset($_POST["validate"]))
{
	if(isset($_POST["book_0"]))
		echo $_POST["book_0"];
}
echo "after"; 

//session_destroy();
?>