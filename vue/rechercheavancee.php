<!DOCTYPE html>
<html>


<head>

	<meta charset="UTF-8"/>
	<title>Échange de logements | Sweetch</title>
	<link rel="stylesheet" href="rechercheparmotcle.css"/>
	<link rel="shortcut icon" href="icon-sweetch.png"/>

		<link rel="stylesheet" href="CSS/inscription.css"/>
		<link rel="stylesheet" href="CSS/header.css"/>
		<link rel="stylesheet" href="CSS/footer.css"/>
		<link rel="stylesheet" href="CSS/general.css"/>
		<link rel="shortcut icon" href="Images/icon-sweetch.png"/>


</head>

	<body>
	


		<section>
				<h1>Où voulez-vous allez?</h1>
<!--

			<label for="Région">Région</label><input type="text" name="search" class="search" placeholder="Région"/>
			
<br/>	
<br/>

			<label for="Ville">Ville</label><input type="text" name="search" class="search" placeholder="Ville"/>
<br/>	
<br/>



          <label class="checkin pull-left"> Arrivée</label>
            <input type="text" id="header-search-checkin" name="checkin" class="checkin" placeholder="jj/mm/aaaa"/>
         
<br/>
<br/>	
          <label class="checkout pull-left">Départ</label>
            
            <input type="text" id="header-search-checkout" class="checkout" name="checkout" placeholder="jj/mm/aaaa"/>
          
<br/>
<br/>	

<label for="Nombre de personnes ">Nombre de personnes </label><input type="text" name="search" class="search" placeholder="Nombre de personnes "/>
<br/>
<br/>	
	<label for="Type de logement">Type de logements </label>
	 <select name="logements" id="logements">
           <option value="maison">Maison</option>
           <option value="appartement">Appartement</option>
           <option value="loft">Loft</option>
           <option value="Villa">Villa</option>
           <option value="Château">Château</option>
          
       </select>
  
-->
<br/>	
			<form method="POST" >
			WIFI <input class="check" id="checkbox_wifi" type="checkbox" name="checkbox_wifi"/>
			<br/>	

			TV <input class="check" id="checkbox_tv" type="checkbox" name="checkbox_tv"/>
			plantes <input class="check" id="checkbox_tv" type="checkbox" name="checkbox_tv"/>


			<input type="button" onclick="rechercheXML()" value="Rechercher" class="submit"/>
			</form>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

		
<div id=resultat ></div>
		</section>
	<script src="Modele/recherche.js" type="text/javascript"></script> 
	</body>
</html>

