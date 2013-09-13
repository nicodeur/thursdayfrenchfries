<?php
class SauvegarderPageTexte extends Page{
	
	public function afficher() {	
		if(isset($_GET["data"])) {
		//echo "pipi : ".$_GET["page"]."/" .$_GET["data"];
			(new DaoPage())->update($_GET["page"],$_GET["data"]);
			echo "ok";
		}	
	}

}
?>