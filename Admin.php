<?php
class Admin{
	private $idAdmin;
	private $nombreAd;
	private $correoAd;
	private $contraseniaAd;
	
	function __construct($idAdmin, $nombreAd, $correoAd, $contraseniaAd){ 
		$this->idAdmin=$idAdmin;
		$this->nombreAd=$nombreAd;
		$this->correoAd=$correoAd;
		$this->contraseniaAd=$contraseniaAd;
	}

	function getIdA(){return $this->idAdmin;}
	function getNombreA(){return $this->nombreAd;}
	function getCorreoA(){return $this->correoAd;}
	function getContraseniaA(){return $this->contraseniaAd;}

	function setIdA($idAdmin){$this->idAdmin=$idAdmin;}
	function setNombreA($nombreAd){$this->nombreAd=$nombreAd;}
	function setCorreoA($correoAd){$this->correoAd=$correoAd;}
	function setContraseniaA($contraseniaAd){$this->contraseniaAd=$contraseniaAd;}
}
?>