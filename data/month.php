<?php

/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
class Month {
	private $num_month;
	private $alph_month;
	
	public function __construct ($num_month,$alph_month){
		$this -> num_month = $num_month;
		$this -> alph_month = $alph_month;
	}
	
	public function getNum_month() {
		return $this -> num_month;
	}
	
	public function getAlph_month() {
		return $this -> alph_month;
	}
}

?>