<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_xonanda extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('m_xonanda');
		$this->load->view('footer');
		
	}
}
