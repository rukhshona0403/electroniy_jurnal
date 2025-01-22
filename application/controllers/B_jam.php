<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_jam extends CI_Controller {

	public function index()
	{$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('b_jam');
		$this->load->view('footer');
	}
}
