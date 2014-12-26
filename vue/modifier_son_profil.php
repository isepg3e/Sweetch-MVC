<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modifier son profil| Sweetch</title>
        <link rel="stylesheet" href="CSS/modifier_son_profil.css">
        <link rel="stylesheet" href="CSS/header.css">
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="CSS/general.css">
        <link rel="shortcut icon" href="Images/icon-sweetch.png"/>
    </head>

    <body>   
        <section>
            <form method="POST">
                       
                <table> 
                    <tr>
                        <td class="titre" colspan=3>
                            Modifier votre profil
                        </td>
                    </tr>              
                    <tr>        
                        <td class="label">
                            <label for="nom">Nom :</label>
                        </td>
                        <td class="inputcase">
                            <input class="input" type="text" name="nom" id="nom" placeholder="votre nom "/>
                        </td>
                        <td class="photocase" rowspan=4>
                            
                        </td>
                    </tr>
                    <tr>    
                        <td class="label">
                            <label for="prenom">Prénom :</label>
                        </td>
                        <td class="inputcase">
                            <input class="input" type="text" name="prenom" id="prenom" placeholder="votre prénom"/>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            <label for="pseudo">pseudo :</label>
                        </td>
                        <td class="inputcase">
                            <input class="input" type="text" name="pseudo" id="pseudo" placeholder="votre pseudo"/>
                        </td>
                    </tr>
                    <tr>   
                        <td class="label">
                            <label for="Age">Date de naissance :</label>
                        </td>
                        <td class="inputcase">
                            <input class="input" type="text" name="age" id="age" placeholder="jj/mm/aaaa"/>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            <label for="Apass">Ancien mot de passe :</label>
                        </td>
                        <td class="inputcase">
                            <input class="input" type="password" name="Apass" id="Apass" placeholder="votre mot de passe"/>
                        </td>
                        <td class="modifphoto">
                            <a href="">Modifier votre photo de profil</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            <label for="Npass">Nouveau mot de passe :</label>
                        </td>
                        <td class="inputcase">
                            <input class="input" type="password" name="Npass" id="Npass" placeholder="votre nouveau mot de passe"/>
                        </td>
                        <td rowspan=2></td>
                    </tr>
                    <tr>
                        <td colspan=3>
                            <input type="button" onclick="modifXML()" class="valider" value=" Enregistrer les modifications " />
                        </td>
                    </tr>
                </table>
            </form>   
        </section>
        
        <script src="Modele/modif_profil.js" type="text/javascript"></script>
    </body>
</html>
