<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asosi extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu_asosi');
		$this->load->view('asosi');
		$this->load->view('footer');
	}
}
