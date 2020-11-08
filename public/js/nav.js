$(function(){
		$("#nav").load(navFunction());
		$("#nav1").load(navFunction2());
		$("#footer").load(footFunction3());
});

function navFunction() {
	return "nav.html";
}

function navFunction2() {
	return "nav1.html";
}

function footFunction3() {
	return "../common/footer.html";
}

function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
}
  
function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}