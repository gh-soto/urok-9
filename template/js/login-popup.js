

function closePopUp() 
{
	var x = document.getElementById("body-shadow-out-x"),
		y = document.getElementById("body-shadow-in-x"),
		a = document.getElementById("dash1"),
		b = document.getElementById("dash2"),
		c = document.getElementById("dash3");
	x.style.display = "none";
	y.style.display = "none";
	a.style.display = "none";
	b.style.display = "none";
	c.style.display = "none";
}

function showPopUp() 
{
	var x = document.getElementById("body-shadow-out-x"),
		y = document.getElementById("body-shadow-in-x"),
		a = document.getElementById("dash1"),
		d = document.getElementById("dash4");
	x.style.display = "block";
	y.style.display = "block";
	a.style.display = "block";
	d.style.display = "none";
}

function showLoginWindow() 
{
	var a = document.getElementById("dash1"),
		b = document.getElementById("dash2");
	a.style.display = "none";
	b.style.display = "block";

}

function backToFirstPopUp() 
{
	var a = document.getElementById("dash1"),
		b = document.getElementById("dash2"),
		c = document.getElementById("dash3"),
		d = document.getElementById("dash4");
	a.style.display = "block";
	b.style.display = "none";
	c.style.display = "none";
	d.style.display = "none";

}

function showSignUpWindow() 
{
	var a = document.getElementById("dash1"),
		c = document.getElementById("dash3");
	a.style.display = "none";
	c.style.display = "block";

}
