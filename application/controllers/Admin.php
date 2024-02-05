<?php 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		}

 
	function index(){

			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/layout/menu');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/layout/footer');
		}

		function Modbus(){

			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/layout/menu');
			$this->load->view('admin/modbus');
			$this->load->view('admin/layout/footer');
		}

		function Modtruk(){

			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/layout/menu');
			$this->load->view('admin/modtruk');
			$this->load->view('admin/layout/footer');
		}

		function Modmobil(){

			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/layout/menu');
			$this->load->view('admin/modmobil');
			$this->load->view('admin/layout/footer');
		}

		function Map(){

			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/layout/menu');
			$this->load->view('admin/map');
			$this->load->view('admin/layout/footer');
		}

		function Liverybus(){

			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/layout/menu');
			$this->load->view('admin/liverybus');
			$this->load->view('admin/layout/footer');
		}

		function Liverytruk(){

			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/layout/menu');
			$this->load->view('admin/liverytruk');
			$this->load->view('admin/layout/footer');
		}

		function Liverymobil(){

			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/layout/menu');
			$this->load->view('admin/liverymobil');
			$this->load->view('admin/layout/footer');
		}

}