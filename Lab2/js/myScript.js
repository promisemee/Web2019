function changeCSS(cssFile, cssLinkIndex){
	var oldlink = document.getElementsByTagName("link").item(cssLinkIndex);
	var newlink = document.createElement("link");
    newlink.setAttribute("rel", "stylesheet");
    newlink.setAttribute("type", "text/css");
    newlink.setAttribute("href", cssFile);
    document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
}

function shownhideButton(buttonid, divid){
	var elem = document.getElementById(buttonid);
	var div = document.getElementById(divid);
	
	if (elem.value == "Click to see the answer!") 
		elem.value = "Click to hide the answer!";
	else elem.value = "Click to see the answer!"

	if(div.style.display=="none"){
		div.style.display="block";
	} else{
		div.style.display = "none"
	}
}


function upDate(previewPic){
    var image = document.getElementById("image");
    image.style.background = "url(" + previewPic.src + ") #8e68ff";
    image.innerHTML = previewPic.alt;

    var childImages = document.getElementById("thumbnails").children;
    var i;
    for ( i = 0; i < childImages.length; i++ ) {
       childImages[i].style.border = '';
    }
   previewPic.style.border="2px solid black";
}

var myVar = setInterval(myTimer, 3000)

function myTimer() {
	var d = new Date();
	var t = d.toLocaleTimeString();
	document.getElementById("timer").innerHTML = t;
}


function random_background(){
	var x = Math.floor(Math.random()*256);
	var y = Math.floor(Math.random()*256);
	var z = Math.floor(Math.random()*256);
	var bgColor = "rgb("+x+","+y+","+z+")";
	document.getElementById("timer").style.backgroundColor = bgColor;
}