<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suroga extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('suroga');
		#$this->load->view('footer');
	}
}
