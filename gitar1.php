<?php
class gitar{

	public $suara;
	public $senar;
	public $merek;
	public $harga_gitar;
//konstraktor
public function __construct($suara,$senar,$merek,$harga_gitar){
	$this->suara = $suara;
	$this->senar = $senar;
	$this->merek = $merek;
	$this->harga_gitar = $harga_gitar;
}
public function get_suara()
	{
	return	$this->suara;
	}
public function get_senar()
	{
	return	$this->senar;
	}
	public function get_merek()
	{
	return	$this->merek;
	}
	public function get_harga_gitar()
	{
	return	$this->harga_gitar;
	}
}
 
?>