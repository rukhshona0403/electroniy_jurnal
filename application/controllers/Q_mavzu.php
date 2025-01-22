<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Q_mavzu extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('q_mavzu');
		$this->load->view('footer');
	}
}
