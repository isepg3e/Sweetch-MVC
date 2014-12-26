function modifXML()
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
			if (xmlhttp.responseText.indexOf("modif=OK") != -1 ) {
				alert('Informations modifiées avec succès');
				document.location.href="index.php?page=accueil"
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
	data = data + "&pseudo=" + document.getElementById("pseudo").value;
	data = data + "&age=" + document.getElementById("age").value;
	data = data + "&Apass=" + document.getElementById("Apass").value;
	data = data + "&Npass=" + document.getElementById("Npass").value;
	
    xmlhttp.open("POST","Modele/modifier_son_profil_POST.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(data);
	
	
}
