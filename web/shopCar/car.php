<?php 
//session_start();

//print_r($_SESSION);
echo "before";

if(isset($_POST["validate"]))
{
	echo "inside 1"; 
    if(isset($_POST["book_0"])){
        echo "The book thief";
		//echo 'book0';
	}
}
echo "after"; 

//session_destroy();
?>