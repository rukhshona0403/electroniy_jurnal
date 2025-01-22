<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Davomot extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('davomot');
		$this->load->view('footer');
	
	}
}
