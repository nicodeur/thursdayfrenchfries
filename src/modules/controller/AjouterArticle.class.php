<?php
class AjouterArticle extends Page{

	public function afficher() {
		// TODO recuperer le fichier de uploadFile et l'ajouter en base
		if(isset($_FILES["img1"]))
			Utils::uploadFile("img1");
		
		if(isset($_FILES["img2"]))
			Utils::uploadFile("img2");
			
		if(isset($_FILES["img3"]))
			Utils::uploadFile("img3");
		
		include("src/modules/vues/FormulaireAjouterArticle.php");
	}
}
?>