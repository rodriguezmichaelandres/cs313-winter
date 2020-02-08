<?php 
//session_start();

//print_r($_SESSION);
echo '<link rel="stylesheet" href="car.css" type="text/css">';

echo '<style>
		margin-left: 5rem; </style>';

if(isset($_POST["validate"]))
{ 
    if(isset($_POST["book_0"])){
        echo "<b>" . "The book thief" . "<br>" . "<img src='https://shereads.com/wp-content/uploads/2019/05/91pZEozf9qL-1.jpg' class='photosBooks'/></b>";
	}
	if(isset($_POST["book_1"])){
        echo "<b>" . "The last year of the war" . "<br>" . "<img src='https://images1.penguinrandomhouse.com/cover/9780451492159' class='photosBooks'/></b>";
	}
	if(isset($_POST["book_2"])){
        echo "<b>" . "Life after life" . "<br>" . "<img src='https://somaggiesays.files.wordpress.com/2019/06/life-after-life.png?w=300&h=464' class='photosBooks'/></b>";
	}
	if(isset($_POST["book_3"])){
        echo "<b>" . "The thousand bomber raids" . "<br>" . "<img src='https://cdn.shopify.com/s/files/1/1819/1457/products/Bomber_Command_The_Thousand_Bomber_Raids_800x.jpg?v=1514533332' class='photosBooks'/></b>";
	}
	if(isset($_POST["book_4"])){
        echo "<b>" . "Girl in the blue coat" . "<br>" . "<img src='https://img.washingtonpost.com/rf/image_480w/2010-2019/WashingtonPost/2016/03/31/BookWorld/Images/c5887bd84f019a649d2a0d2ed64d55d4.jpg?uuid=F9-dcvdlEeWjzvBrW6IfMw' class='photosBooks'/></b>";
	}
	if(isset($_POST["book_5"])){
        echo "<b>" . "The fire by night" . "<br>" . "<img src='https://images-na.ssl-images-amazon.com/images/I/51rJwAZgS4L._SX331_BO1,204,203,200_.jpg' class='photosBooks'/></b>";
	}
	
}

echo '<a href="car.html"><button name="return" type="button">Continue shopping</button></a><br>'

?>