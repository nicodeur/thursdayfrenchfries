<?php
	class DaoPage {
		
		
		public function getAll() {
			$sql =  'select * from Page';
			
			return (new Connection())->query($sql);
		}
		
		public function get($tab) {
			$sql = 'select * from Page where 1=1';
			
			foreach($tab as $cle => $val) {
				$quote="";
				if(is_string($val)) $quote = "'";
			
				$sql .= ' and '.$cle.'='.$quote.$val.$quote;
			}
			
			return (new Connection())->query($sql);
		}
		
		
		public function update($page,$data) {
			$sql = "update Page set contenu='".mysql_real_escape_string($data)."' where nom='$page'";
							
			return (new Connection())->update($sql);
		}

	}
?>