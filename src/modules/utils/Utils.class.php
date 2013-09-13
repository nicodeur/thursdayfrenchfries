<?php
include("sequenceNumImg.php");

class Utils {

	private static function incrementSequenceNumImg()
	{
		$out='<?php class Sequence { public static $prochainNumImg=';
		Sequence::$prochainNumImg++;
		$out.=Sequence::$prochainNumImg;
		$out.='; } ?>';
		$hwnd=fopen("sequenceNumImg.php",'wb');
		if(fwrite($hwnd,$out))fclose($hwnd);
	}
	
	/**
	 * Upload un fichier (avec la balise <input type='file />)
	 * @param String $nomImg le nom du champs "name" du <input type='file /> 
	 * @return String le chemin absolu du fichier uploadé (null si erreur)
	 */
	public static function uploadFile($nomImg) {
		$nomOrigine = $_FILES[$nomImg]['name'];
		
		if($nomOrigine == "") return;
		
		$elementsChemin = pathinfo($nomOrigine);
				
		$extensionFichier = $elementsChemin['extension'];
				
		$extensionsAutorisees = array("jpeg", "jpg", "gif");
		if (!(in_array($extensionFichier, $extensionsAutorisees))) {
			echo "Le fichier n'a pas l'extension attendue";
		} else {
			// Copie dans le repertoire du script avec un nom
			// incluant l'heure a la seconde pres
			$repertoireDestination = "E:\\site Web\\sdumaisnil\\img\\compos\\";
			$nomDestination = "img_".Sequence::$prochainNumImg.".".$extensionFichier;
						
			if (move_uploaded_file($_FILES[$nomImg]["tmp_name"],
			$repertoireDestination.$nomDestination)) {	
				Utils::incrementSequenceNumImg();
				return $repertoireDestination.$nomDestination;
			} else {
				echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
				
				return null;
			}
		}
	}
	
	
}
?>