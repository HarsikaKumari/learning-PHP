<!DOCTYPE html>
<html>
<body>

<div id="demo">
<h2> The XMLHttpRequest Object </h2>
<button type="button" onClick="loadDoc()"> Change content</button>
</div>

<script>
function loadDoc() {
	var xhttp;
	if(window.XMLHttpRequest){
		xhttp = new XMLHttpRequest();
	} else {
		xhttp = new ActiveXObject("Microsoft.XMLHTTP")
	}
	xhttp.onreadystatechange = function() {
		if(this.readyState==4 && this.status==200){
			document.getElementById("demo").innerHTML = this.responseText;
		}
	};
	console.log(xhttp);
	
	//xhttp.open("GET", "menu.xml", true);
	xhttp.open("POST", "menu.xml", true);
	xhttp.send();
}
</script>

</body>
</htm>