<?php 
//session_start();

//print_r($_SESSION);
echo '<link rel="stylesheet" href="car.css" type="text/css">';

if(isset($_POST["validate"]))
{ 
    if(isset($_POST["book_0"])){
        echo "<style>margin-left: 5rem; 
		margin-right: 5rem;
		</style>"."
		The book thief" . "<br>" . "<img src='https://shereads.com/wp-content/uploads/2019/05/91pZEozf9qL-1.jpg' class='photosBooks'/>";
		
		//echo 'book0';
	}
}
//echo "after"; 

//session_destroy();
?>