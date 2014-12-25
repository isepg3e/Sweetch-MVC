function connexionXML()
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
			if (xmlhttp.responseText.indexOf("connexion=ok") != -1 ) {
				alert('Bien joué, tu es maintenant Connecté à JAMAIS sur ce site.');
			}
			else {
		//		document.getElementById("ligneErreur").innerHTML=xmlhttp.responseText;
				alert(xmlhttp.responseText);
			}
		}
	}
	
	
	
	data = "";
	data = "pseudo=" + document.getElementById("pseudo").value;
	data = data + "&mdp=" + document.getElementById("mdp").value;
	
    xmlhttp.open("POST","Modele/connexion_POST.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(data);
}
