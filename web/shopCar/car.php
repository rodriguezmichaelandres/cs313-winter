<?php 
//session_start();

//print_r($_SESSION);

$active = filter_input(INPUT_POST, 'product', FILTER_VALIDATE_BOOLEAN);

if (!isset($POST['product']))
	$active = 0;
echo $active;
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