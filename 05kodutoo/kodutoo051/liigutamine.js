window.onload = function() {
	var circle = document.getElementById("outerdiv");
	
	circle.onclick = function(){
		circle.style.left = Math.random()*window.innerWidth-50 + "px";
		circle.style.top = Math.random()*window.innerHeight-50 + "px";
	}
}