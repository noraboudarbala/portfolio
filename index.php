
    <?php




if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controlleur/accueil.php'); //include_once signifie que le fichier est inclus une seule fois
}

else {
   
    if ($_GET['section'] == 'projets')
    {
        include_once('controlleur/projets.php');
    }
    
    if ($_GET['section'] == 'contact')
    {
        include_once('controlleur/contact.php');
    }
    if ($_GET['section'] == 'stage1')
    {
        include_once('controlleur/stage1.php');
    } 
    if ($_GET['section'] == 'stage2')
    {
        include_once('controlleur/stage2.php');
    } 
    if ($_GET['section'] == 'projet1')
    {
        include_once('controlleur/projet1.php');
    } 
    if ($_GET['section'] == 'projet2')
    {
        include_once('controlleur/projet2.php');
    }
    if ($_GET['section'] == 'projet3')
    {
        include_once('controlleur/projet3.php');
    }
    
    
}



?>
