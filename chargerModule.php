<?php 
/**
 * pour l'url Rewritting
 */
if (isset($_SERVER['PATH_INFO'])) {
    $arg = explode('/', $_SERVER['PATH_INFO']);
    if (isset($arg[1]) && !empty($arg[1]) && isset($arg[2]) && !empty($arg[2])) {
        $_GET[$arg[1]] = (substr($arg[2],-5)=='.html') ? substr($arg[2],0,-5) : $arg[2];
    }
    if (isset($arg[3]) && !empty($arg[3]) && isset($arg[4]) && !empty($arg[4])) {
        $_GET[$arg[3]] = (substr($arg[4],-5)=='.html') ? substr($arg[4],0,-5) : $arg[4];
    }
}


// inclusion
include("src/modules/utils/Utils.class.php");

// Dao
include("src/dao/Connexion.class.php");
include("src/dao/DaoPage.class.php");

// controller
include("src/modules/controller/Page.class.php");
include("src/modules/controller/PageDynamique.class.php");
include("src/modules/controller/MesCompositions.class.php");
include("src/modules/controller/AfficherComposition.class.php");
include("src/modules/controller/FormulaireAjouterArticle.class.php");
include("src/modules/controller/AjouterArticle.class.php");
include("src/modules/controller/Admin.class.php");
include("src/modules/controller/admin/GererPageTexte.class.php");
include("src/modules/controller/admin/SauvegarderPageTexte.class.php");


// traitement du MVC

  $module = new PageDynamique("accueil");
  $action=1;

	$nomModule = "accueil";
	if(isset($_GET["module"])) {
		$nomModule = $_GET["module"];
	}
	else if (isset($_POST["module"])) { 
		$nomModule = $_POST["module"];
	}
	//echo $nomModule;
	switch($nomModule)
	{
		case "mesCompos":
			$module = new MesCompositions();
			break;
		case "AfficherCompos":
			$module = new AfficherComposition();
			break;
			
		// admin
		case "admin":					
			$module = new Admin();			
			break;
		case "gererpagetexte":
			$module = new GererPageTexte();
			break;	
		case "sauvegarderPageTexte":
			$module = new SauvegarderPageTexte();
			break;	
		default : 
			$module = new PageDynamique($nomModule);
			break;
	}


?>