<?php

class PageDynamique extends Page{
	private $nomPage;
	
	function __construct($nomPage) {
		$this->nomPage=$nomPage;
	}
	
	public function afficher() {		
		$result = (new DaoPage())->get(array('nom'=>$this->nomPage))[0];				
		$contenu = $result['contenu'];
		include('src/modules/vues/PageDynamique.php');
	}
}

?>