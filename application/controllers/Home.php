<?php 
class Home extends CI_Controller{
 
	// function __construct(){
	// 	parent::__construct();
	// 	}

 
	function index(){

			$this->load->view('website/layout/header');
			$this->load->view('website/home');
			$this->load->view('website/layout/footer');
		}

	function obi(){

		$this->load->view('website/layout/header');
		$this->load->view('website/obi');
		$this->load->view('website/layout/footer');
	}
}