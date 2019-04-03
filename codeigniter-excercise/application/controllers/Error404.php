<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

	
	public function index()
	{
		
		// moving data from controller to view

		$this->load->view('includes/header');
		$this->load->view('error404_view');
		$this->load->view('includes/footer');
	}

}
