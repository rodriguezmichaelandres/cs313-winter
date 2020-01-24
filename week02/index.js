function clicked(){
	alert("Clicked!");
}

function changeColor(){
	/*var c = 1;
	if (c == 1){
		color = "green";
		document.getElementById("n1").style.background='green';
		c++;
	}
	else if (c == 2){
		document.getElementById("n1").style.background='red';
		c++
	}
	else if (color == 3){
		document.getElementById("n1").style.background='pink';
		color = 1;
	}
	else{
		color = 1;
		document.getElementById("n1").style.background='yellow';
	}*/
	let colour = document.getElementById("colors").value;
	document.getElementById("n1").style.color = colour;

}