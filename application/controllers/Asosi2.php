<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asosi2 extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu2');
		$this->load->view('asosi2');
		$this->load->view('footer');
	}
}
