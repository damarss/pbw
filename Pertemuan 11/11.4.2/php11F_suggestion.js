function showHint(str) {
	var txtHint = document.getElementById("txtHint");
	if (str.length == 0) {
		txtHint.innerHTML = "";
		return;
	}

	xhttp = new XMLHttpRequest();

	function ajaxResponse() {
		txtHint.innerHTML = "";
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			try {
				const myObj = JSON.parse(xhttp.responseText)
				for (let i in myObj) {
					if (myObj.length-1 == i)
						txtHint.innerHTML += myObj[i].name;
					else
						txtHint.innerHTML += myObj[i].name + ", ";
				}
			} catch (e) {
				txtHint.innerHTML = xhttp.responseText;
			}
		}
	}

	xhttp.onreadystatechange = ajaxResponse;
	xhttp.open("GET", "php11F_gethint2.php?keyword=" + str, true);
	xhttp.send();
}