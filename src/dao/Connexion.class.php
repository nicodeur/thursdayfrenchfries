<?php

	class Connection{
		protected $host,$user,$mdp,$db;
		protected $debug = true;
		/**
		 * Constructeur pour se connecter à la base
		 */ 
		function __construct($h='localhost',$u='root',$m='',$d='thursdayfrenchfries') {
			$this->host = $h;
			$this->user = $u;
			$this->mdp  = $m;
			$this->db = $d;
			mysql_connect($this->host,$this->user,$this->mdp);
			mysql_select_db($this->db);
		}
		
		function query($sql) {
			$res = mysql_query($sql);
			if($this->debug && mysql_errno()!=0) {
				echo "$sql<br />";
				die(mysql_error());
			}

			$tabres=[];
			$i=0;
			while ($row = mysql_fetch_assoc($res)) {
				$tabres[$i]=$row;
				$i++;
			}
			
			return $tabres;
		}
		
		function update($sql) {
			$res = mysql_query($sql);
			if($this->debug && mysql_errno()!=0) {
				echo "$sql<br />";
				die(mysql_error());
			}
		}
	}      
?>