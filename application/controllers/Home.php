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

	function modbus(){

		$this->load->view('website/layout/header');
		$this->load->view('website/modbus');
		$this->load->view('website/layout/footer');
	}

	function modtruk(){

		$this->load->view('website/layout/header');
		$this->load->view('website/modtruk');
		$this->load->view('website/layout/footer');
	}

	function modmobil(){

		$this->load->view('website/layout/header');
		$this->load->view('website/modmobil');
		$this->load->view('website/layout/footer');
	}

	function map(){

		$this->load->view('website/layout/header');
		$this->load->view('website/map');
		$this->load->view('website/layout/footer');
	}

	function liverybus(){

		$this->load->view('website/layout/header');
		$this->load->view('website/liverybus');
		$this->load->view('website/layout/footer');
	}

	function liverytruk(){

		$this->load->view('website/layout/header');
		$this->load->view('website/liverytruk');
		$this->load->view('website/layout/footer');
	}

	function liverymobil(){

		$this->load->view('website/layout/header');
		$this->load->view('website/liverymobil');
		$this->load->view('website/layout/footer');
	}
}