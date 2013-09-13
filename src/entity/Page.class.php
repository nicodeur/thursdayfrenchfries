<?php
	class Page {
		$nom,
		$contenu,
		$dateModif,
		$userModif
	
		// mapping
		public function set($attribut, $valeur) {
			switch($attribut) {
				case 'nom' :
					$nom = $valeur;
					break;
				case 'contenu' :
					$contenu = $valeur;
					break;
				case 'dateModif' :
					$dateModif = $valeur;
					break;
				case 'userModif' :
					$userModif = $valeur;
					break;
			}
		}
		
		public function get() {
			$tab['nom']=$nom;
			$tab['contenu']=$nom;
			$tab['dateModif']=$nom;
			$tab['userModif']=$nom;					
		}
	}
?>