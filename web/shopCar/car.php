<?php 
//session_start();

//print_r($_SESSION);
echo "before if";

$arr_use = $_POST["book"];

for($i=0; $i<count($arr_use); $i++)
{
	if($arr_use[$i] != NULL){
		echo $arr_use[$i];
	}

/*if(!(empty($_POST['book']))){
	echo "<br>";
	foreach($_POST['book'] as $book){		
		echo $book."<br>";	
		echo "close if statement";
	}
	
}

$active = filter_input(INPUT_POST, 'product', FILTER_VALIDATE_BOOLEAN);

if (!isset($POST['product']))
	$active = 0;
echo $active;*/
/*$active = [];

foreach ($_POST['checkboxes'] as $option){
	if($option){
		$active[$option] = 1; 
	} else {
		$active[$option] = 0;
	}
}*/

echo "hola"; 

//session_destroy();
?>