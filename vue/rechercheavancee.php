<!DOCTYPE html>
<html>
	<head>
			<meta charset="UTF-8"/>
			<title>Échange de logements | Sweetch | Recherche</title>
			
			<link rel="shortcut icon" href="Images/icon-sweetch.png"/>
			<link rel="stylesheet" href="CSS/header.css"/>
			<link rel="stylesheet" href="CSS/footer.css"/>
			<link rel="stylesheet" href="CSS/general.css"/>
			<link rel="stylesheet" href="CSS/recherche.css"/>
	</head>

	<body>
	<section id="section">
		<div id="recherche">
			<form method="POST">
						<div id="description">
						<div id="titre">faites votre recherche<br/><br/></div>
						<div id="d1">Description:</div>
						<div id="d2">
							<div id="d2a">maison 		<input class="check" id="checkbox_maison" type="checkbox" name="checkbox_maison"/> <br/>
										  appartement   <input class="check" id="checkbox_appartement" type="checkbox" name="checkbox_appartement"/> <br/>
										  loft 			<input class="check" id="checkbox_loft" type="checkbox" name="checkbox_loft"/> <br/>
										  autre 		<input class="check" id="checkbox_autre" type="checkbox" name="checkbox_autre"/> <br/>
							</div>
							<div id="d2b">
											Ville		<select name='ville' size='1'>
																<option value='nv'></option>
																<option value='Paris'>Paris</option>
																<option value='Marseille'>Marseille</option>
																<option value='Lyon'>Lyon</option>
																<option value='Toulouse'>Toulouse</option>
																<option value='Nice'>Nice</option>
																<option value='Nantes'>Nantes</option>
																<option value='Strasbourg'>Strasbourg</option>
																<option value='Montpellier'>Montpellier</option>
																<option value='Bordeaux'>Bordeaux</option>
																<option value='Lille'>Lille</option>
																<option value='Rennes'>Rennes</option>
																<option value='Reims'>Reims</option>
																<option value='Saint_Étienne'>Saint-Étienne</option>
																<option value='Toulon'>Toulon</option>
																<option value='Amiens'>Amiens</option>
														</select> <br/>
											région		<select name='region' size='1' id='region'>
																<option value='0'>indéfinie</option>
																<option value='IDF'>Île-de-France</option>
																<option value="PACA">Provence-Alpes-Côte d'Azur</option>
																<option value='RA'>Rhône-Alpes</option>
																<option value='MP'>Midi-Pyrénées</option>
																<option value='Alsace'>Alsace</option>
																<option value='Aquitaine'>Aquitaine</option>
																<option value='Bretagne'>Bretagne</option>
																<option value='LR'>Languedoc-Roussillon</option>
																<option value='PL'>Pays de la Loire</option>
																<option value='NC'>Nord-Pas-de-Calais</option>
																<option value='HN'>Haute-Normandie</option>
																<option value='Limousin'>Limousin</option>
																<option value='Picardie'>Picardie</option>
																<option value='PC'>Poitou-Charentes</option>
																<option value='Lorraine'>Lorraine</option>
														</select>
							
							</div>
						</div>
					</div> <br/>
									
					<div id="services">
						<div id="s1">Services:</div>
						<div id="s2">
							Fermer la porte à double tour en sortant	<input class="check" id="checkbox_porte" type="checkbox" name="checkbox_porte"/> <br/>
							Garder des animaux domestiques 				<input class="check" id="checkbox_animaux" type="checkbox" name="checkbox_animaux"/> <br/>
							Arroser des plantes 						<input class="check" id="checkbox_plante" type="checkbox" name="checkbox_plante"/> <br/>
							Discuter 1h avec la vieille voisine 		<input class="check" id="checkbox_disc" type="checkbox" name="checkbox_disc"/> <br/>
							Faire le ménage avant de quitter le logement<input class="check" id="checkbox_menage" type="checkbox" name="checkbox_menage"/> <br/>
						</div>
					</div> <br/>

					<div id="contraintes">
						<div id="c1">Contraintes:</div>
						<div id="c2">
							Ne pas fumer dans le logement				<input class="check" id="checkbox_fumer" type="checkbox" name="checkbox_fumer"/> <br/>
							Pas de bruit après 23h		 				<input class="check" id="checkbox_bruit" type="checkbox" name="checkbox_bruit"/> <br/>
							2 enfants maximum par logement 				<input class="check" id="checkbox_Menfant" type="checkbox" name="checkbox_Menfant"/> <br/>
							Pas d'animaux admis					 		<input class="check" id="checkbox_Nanimaux" type="checkbox" name="checkbox_Nanimaux"/> <br/>
							Ne pas marcher en talon sur le parquet		<input class="check" id="checkbox_talon" type="checkbox" name="checkbox_talon"/> <br/>
						</div>
					</div> <br/>

					<div id="equipements">						
						<div id="e1">Equipements:</div>
						<div id="e2">
							<div id="e2a">Sèche linge <input class="check" id="checkbox_slinge" type="checkbox" name="checkbox_slinge"/> <br/>
										  Lave linge <input class="check" id="checkbox_llinge" type="checkbox" name="checkbox_llinge"/> <br/>
										  Lave vaisselle <input class="check" id="checkbox_lvais" type="checkbox" name="checkbox_lvais"/> <br/>
										  Four micro-onde <input class="check" id="checkbox_onde" type="checkbox" name="checkbox_onde"/> <br/>
							</div>
							<div id="e2b">
										  Baignoire <input class="check" id="checkbox_baign" type="checkbox" name="checkbox_baign"/> <br/>
										  Chauffage <input class="check" id="checkbox_chauff" type="checkbox" name="checkbox_chauff"/> <br/>
										  Equipement bébé <input class="check" id="checkbox_bb" type="checkbox" name="checkbox_bb"/> <br/>
										  Cheminée <input class="check" id="checkbox_chemine" type="checkbox" name="checkbox_chemine"/> <br/>
							</div>
						</div>
					</div> <br/>

					<div id="multimedia">
						<div id="m1">Multimedia:</div>
						<div id="m2">
							<div id="m2a">TV <input class="check" id="checkbox_tv" type="checkbox" name="checkbox_tv"/> <br/>
										  WIFI <input class="check" id="checkbox_wifi" type="checkbox" name="checkbox_wifi"/> <br/>
										  Home cinema <input class="check" id="checkbox_HC" type="checkbox" name="checkbox_HC"/> <br/>
										  Satellite/câble <input class="check" id="checkbox_cable" type="checkbox" name="checkbox_cable"/> <br/>
							</div>
							<div id="m2b">
										  téléphone <input class="check" id="checkbox_phone" type="checkbox" name="checkbox_phone"/> <br/>
										  Console de jeu <input class="check" id="checkbox_jeu" type="checkbox" name="checkbox_jeu"/> <br/>
										  Ordinateur <input class="check" id="checkbox_ordi" type="checkbox" name="checkbox_ordi"/> <br/>
										  Lecteur DVD <input class="check" id="checkbox_dvd" type="checkbox" name="checkbox_dvd"/> <br/>
							</div>
						</div>
					</div> <br/>

					<div id="exterieur">
						<div id="ex1">Extérieur:</div>
						<div id="ex2">
							<div id="ex2a">Jardin <input class="check" id="checkbox_jardin" type="checkbox" name="checkbox_jardin"/> <br/>
										  Cours de tennis <input class="check" id="checkbox_tennis" type="checkbox" name="checkbox_tennis"/> <br/>
										  Piscine <input class="check" id="checkbox_pis" type="checkbox" name="checkbox_pis"/> <br/>
										  Aire de jeux <input class="check" id="checkbox_air" type="checkbox" name="checkbox_air"/> <br/>
							</div>
							<div id="ex2b">
										  Table de ping-pong <input class="check" id="checkbox_pong" type="checkbox" name="checkbox_pong"/> <br/>
										  Barbecue <input class="check" id="checkbox_barbecul" type="checkbox" name="checkbox_barbecul"/> <br/>
										  terrasse/balcon <input class="check" id="checkbox_ball" type="checkbox" name="checkbox_ball"/> <br/>
										  Parking <input class="check" id="checkbox_king" type="checkbox" name="checkbox_king"/> <br/>
							</div>
						</div>
					</div> <br/>

					<div id="divers">
						<div id="di1">Divers:</div>
						<div id="di2">
							<div id="di2a">Air conditionné <input class="check" id="checkbox_ac" type="checkbox" name="checkbox_ac"/> <br/>
										  Jacuzzi <input class="check" id="checkbox_jac" type="checkbox" name="checkbox_jac"/> <br/>
										  Gardien <input class="check" id="checkbox_gar" type="checkbox" name="checkbox_gar"/> <br/>
										  Ascenseur<input class="check" id="checkbox_asc" type="checkbox" name="checkbox_asc"/> <br/>
							</div>
							<div id="di2b">
										  Service de ménage <input class="check" id="checkbox_me" type="checkbox" name="checkbox_me"/> <br/>
										  Sauna <input class="check" id="checkbox_sauna" type="checkbox" name="checkbox_sauna"/> <br/>
										  Piano <input class="check" id="checkbox_piano" type="checkbox" name="checkbox_piano"/> <br/>
										  Salle de sport <input class="check" id="checkbox_sds" type="checkbox" name="checkbox_sds"/> <br/>
							</div>
						</div>
					</div> <br/>
				
				

				
	<!--		WIFI <input class="check" id="checkbox_wifi" type="checkbox" name="checkbox_wifi"/>
			<br/>	

			TV <input class="check" id="checkbox_tv" type="checkbox" name="checkbox_tv"/>
			<br/>
-->
<!--<input type="submit"> -->
			<input type="button" onclick="rechercheXML()" value="Rechercher" class="bouton"/>
			<br/>
			<br/>
			<br/>
			</form>
		</div>
		<div id=resultat ></div>

	</section>
	<script src="Modele/recherche.js" type="text/javascript"></script> 
	</body>
</html>

