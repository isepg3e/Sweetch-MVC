<?php

   // session_start();

   //include("Vues/header.php");

    if (isset($_GET['page']))
    {
        if ($_GET['page'] == "accueil")
            {
                include("Vues/accueil.php");
            }
        else if ($_GET['page'] == "inscription")
            {
                include("Vues/inscription.php");
            }
        else if ($_GET['page'] == "connexion")
            {
                include("Vues/connexion.php");
            }
        else if ($_GET['page'] == "publication")
            {
                include("Vues/publicationA.php");
            }
        else if ($_GET['page'] == "aide")
            {
                include("Vues/aide.php");
            }
        else if ($_GET['page'] == "recherche-avancee")
            {
                include("Vues/rechercheavancee.php");
            }
        else if ($_GET['page'] == "annonce")
            {
                include("Vues/annonce_detaillee.php");
            }
        else if ($_GET['page'] == "forum")
            {
                include("Vues/forum.php");
            }
        else if ($_GET['page'] == "profil")
            {
                include("Vues/profile.php");
            }
        else if ($_GET['page'] == "contact")
            {
                include("Vues/nouscontacter.php");
            }
        else if ($_GET['page'] == "modifierprofil")
            {
                include("Vues/modifier_son_profil.php");
            }
        else if ($_GET['page'] == "nouscontacter")
            {
                include("Vues/nouscontacter.php");
            }
        else if ($_GET['page'] == "accueiladmin")
            {
                include("Vues/accueiladmin.php");
            }
        else if ($_GET['page'] == "backoffice")
            {
                include("Vues/backoffice.php");
            }
        else if ($_GET['page'] == "membreBO")
            {
                include("Vues/membreBO.php");
            }
		else if ($_GET['page'] == "logeBO")
            {
                include("Vues/logeBO.php");
            }
		else if ($_GET['page'] == "serviceBO")
            {
                include("Vues/serviceBO.php");
            }
    }
    else 
    {
        include("Vues/accueil.php");
    }

  // include("Vues/footer.php");

?>  
