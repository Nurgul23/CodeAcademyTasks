function changeText() {
	var text=document.getElementById('textYaz').value
	document.getElementById('textGoster').innerHTML= text
}
function changeImage() {
	var link=document.getElementById('linkYaz').value
	document.getElementById('image').src=link
}
var a= true;
function changeBorder() {
	if(a){
		document.getElementById('image').style.border="1px solid black";
		a= false
	}
	else {
		document.getElementById('image').style.border="none";
		a=true
	}
}
function changeColor() {
	if(a){
		document.getElementById('textGoster').style.backgroundColor="blue";
		a=false
	}
	else{
		document.getElementById('textGoster').style.backgroundColor="red";
		a=true
	}
}
function changeWeight() {
	if(a){
		document.getElementById('textGoster').style.fontWeight="bold";
		a=false
	}
	else{
		document.getElementById('textGoster').style.fontWeight="";
		a=true
	}
}
function changePlace() {
if(a){
	document.getElementById('textGoster').style.top='35px';
	a=false
}
else{
	document.getElementById('textGoster').style.top='375px';
	a=true
}
}