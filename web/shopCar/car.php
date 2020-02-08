<?php 
//session_start();

//print_r($_SESSION);
echo "before";

if(isset($_POST["validate"]))
{
	echo "inside 1"; 
	if(isset($_POST["book_0"]))
	{
		echo $_POST["book_0"];
		echo "inside 2"; 
	}
}
echo "after"; 

//session_destroy();
?>