var x = false;
if(window.XMLHttpRequest)
{	
	//code for IE7+,FireFox,Chrome,Opera,Safari
	x=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{ 
	//code for IE6,IE5
	x=new ActiveXObject("Microsoft.XMLHTTP");
}
function getState()
{
	if(x)
	{	
		var url ="data.php?cmb_country="+document.getElementById("cmb_country").value;
		//alert(url);
		x.open("GET",url);
		x.onreadystatechange=function()
		{
			if(x.readyState==4 && x.status==200)
			{
				document.getElementById("span_state").innerHTML=x.responseText;
			}
		}
		x.send(null);
	}
}
function getCity()
{
	if(x)
	{	
		var url ="data.php?cmb_state="+document.getElementById("cmb_state").value;
		//alert(url);
		x.open("GET",url);
		x.onreadystatechange=function()
		{
			if(x.readyState==4 && x.status==200)
			{
				document.getElementById("span_city").innerHTML=x.responseText;
			}
		}
		x.send(null);
	}
}