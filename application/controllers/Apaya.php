<?php

class Apaya extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		# code...
		echo "hey Jude!";
	}

public function navbar(){
	$this->load->view('menu');
}	
public function navbar2(){
	$this->load->view('profil');
}
public function navbar3(){
	$this->load->view('kontak');
}		

}
?>