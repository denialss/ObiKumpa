<?php 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		}

 
	function index(){

			$this->load->view('admin/layout/sidebar');
			// $this->load->view('website/home');
			// $this->load->view('website/footer');
		}

}