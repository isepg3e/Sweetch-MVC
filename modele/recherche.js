function rechercheXML()
{
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}


	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
		//	if (xmlhttp.responseText.indexOf("recherche=ok") != -1 ) {
				leselect = xmlhttp.responseText;
				document.getElementById('resultat').innerHTML = leselect;
			
		//	}
			
		}
	}


data = "";
	//data = "checkbox_wifi=" + document.getElementById("checkbox_wifi").checked;
	data = data + "checkbox_tv=" + document.getElementById("checkbox_tv").checked;
	//data = data + "&checkbox_maison=" + document.getElementById("checkbox_maison").checked;
	//data = data + "&checkbox_appartement=" + document.getElementById("checkbox_appartement").checked;
	//data = data + "&checkbox_loft=" + document.getElementById("checkbox_loft").checked;
	//data = data + "&checkbox_autre=" + document.getElementById("checkbox_autre").checked;
//pour les listes deroulantes:
var selectElmt = document.getElementById("region");
var valeurselectionnee = selectElmt.options[selectElmt.selectedIndex].value;
//var textselectionne = selectElmt.options[selectElmt.selectedIndex].text;
	
	data = data + "&region=" + valeurselectionnee;
	
	//data = data + "&ile_de_France=" + document.getElementById("ile_de_France").value;
	
	alert(data);
    xmlhttp.open("POST","Modele/recherche_post.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(data);
}
