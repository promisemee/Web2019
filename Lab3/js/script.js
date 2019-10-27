var setTime = 1;
var colours = ["blue","red","orange","green","purple","gray"];
var num_colours = [0,0,0,0,0,0];
var myvar;
var c;


function startGame(){
	hidebutton();

	document.getElementById("colourPanel").style.visibility = "visible";
	document.getElementById("colourPanel").innerHTML = "GAME START";

	//draw grid
	var grid = drawGrid(6,6);
	document.body.appendChild(grid);

	myvar = setInterval(this.startTimer, 1000);
}

function random(){
	return Math.floor(Math.random() * Math.floor(6));
}

function pad(n, width){
	n = n +'';
	return n.length>=width?n:new Array(width - n.length + 1).join('0') + n;
}

function startTimer(){
	setTime++;
}

function showPanel(c){
	let p = document.getElementById("colourPanel");
	p.innerHTML= c;
	p.style.color = c;
	color = c;
}

function drawGrid(rows, cols){
  	var grid = document.createElement('table');
  	grid.className = 'grid';
  	for (var r=0;r<rows;++r){
	    var tr = grid.appendChild(document.createElement('tr'));
	    for (var c=0;c<cols;++c){
	    	var rand = random();

	      	var cell = tr.appendChild(document.createElement('td'));
	      	while(num_colours[rand]>5){
	      		rand = random();
	      	}
	      	cell.style.backgroundColor = colours[rand];
	      	num_colours[rand]++;
	      	cell.onclick = function(){
	      		clickCell(this);
	      	}
    	}
  }
  return grid;
}

function hidebutton(){
	document.getElementById('startbutton').style.display = 'none'; 
}

var temp;
var tmp;
var nc = num_colours.reduce(myFunc);
var check = 0;
var total = 36;

function clickCell(tableCell){

	var color = tableCell.style.backgroundColor;
	if ((color != "black")&&(tmp != tableCell)){

		var k;
		for(var i=0;i<num_colours.length;i++){
			if (num_colours[i] == color)
				k = i;
		}

		if (check==0){
			temp = color;
			tmp = tableCell;
			showPanel(color);
			check = 1;
		}
		else{
			if (temp == color){
				tmp.style.backgroundColor = "black";
				tableCell.style.backgroundColor = "black";
				total -= 2;
				check = 0;
			}
		}
	}

	if (total < 2)
		gameOver();

}

function gameOver(){
	let p = document.getElementById("colourPanel");
	p.innerHTML= "GAME OVER";
	p.style.color = "black";
	clearTimeout(myvar);
	var t = pad(Math.floor(setTime/60),2)+" : "+pad((setTime%60),2);
	alert(t)
}

function myFunc(total, num) {
  return total + num;
}

