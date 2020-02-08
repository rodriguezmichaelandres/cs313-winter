<?php 
//session_start();

//print_r($_SESSION);
echo "before if";
if (isset ($_POST['validate'])){
	
	$arrayCheck = $_POST['book'];
	//$num = count[$arrayCheck];
	
	print_r('Check box: '.$num.'<br>');
	
	print_r('Valores: <br>');
	
	for($n = 6; $n < $num; $n++){
		print_r()$arrayCheck[$n].'<br>';
	}
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