function inscriptionXML()
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
			if (xmlhttp.responseText.indexOf("inscription=ok") != -1 ) {
				alert('FELICITATION VOUS ETES INSCRIT SUR CE SITE DE MERDE !!');
			}
			else {
		//		document.getElementById("ligneErreur").innerHTML=xmlhttp.responseText;
				alert(xmlhttp.responseText);
			}
		}
	}
	
	data = "";
	data = "nom=" + document.getElementById("nom").value;
	data = data + "&prenom=" + document.getElementById("prenom").value;
	data = data + "&age=" + document.getElementById("age").value;
	data = data + "&email=" + document.getElementById("email").value;
	data = data + "&pseudo=" + document.getElementById("pseudo").value;
	data = data + "&mdp=" + document.getElementById("mdp").value;
	data = data + "&cmdp=" + document.getElementById("cmdp").value;
	data = data + "&checkbox=" + document.getElementById("checkbox").checked;
	
    xmlhttp.open("POST","Modele/inscription_post.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(data);
	
}
