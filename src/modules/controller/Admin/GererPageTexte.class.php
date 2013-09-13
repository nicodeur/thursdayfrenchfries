<?php

class GererPageTexte extends Page{

	public function afficher() {	
		$lesPages = (new DaoPage())->getAll();
		include("src/modules/vues/Admin/GererPageTexte.php");
	}
}

?>