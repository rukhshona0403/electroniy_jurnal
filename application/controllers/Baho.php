<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baho extends CI_Controller {

	public function index()
	{
		
	 	$cntData['urlPage']=base_url().'jurnal/index.php/davomot';
		$this->load->model('MainModel');
		$cntData['dtProblem']=$this->MainModel->getAllFromFan();
		$cntData['sinfProblem']=$this->MainModel->getAllFromSinf();
		$cntData['sanaProblem']=$this->MainModel->getAllFromSana();
		
		if($this->input->post('btnAdd')) {
			//$dd['id_teacher'] = $this->input->post('login');
			$dd['id_subject'] = $this->input->post('selFan');			
			$dd['id_class'] = $this->input->post('selSinf');
			$this->MainModel->getAllFromDate($dd);
			$cdata['dataProblem']=$this->MainModel->getAllFromDate($dd);
			$this->load->view('baho',$cdata);
	
			/*$dd['class'] = $this->input->post('selSinf');
			$dd['subject_name'] = $this->input->post('selFan');
		    $dd['date'] = $this->input->post('selSana');
			print_r($dd['id_subject']);
			$cntData['nomNasabProblem']=$this->MainModel->getAllNomFromSinf($dd['id_student'][0]);
			$cntData['fanProblem']=$this->MainModel->getAllFanFromSinf($dd['id_fan'][0]);
			$cntData['sanaProblem']=$this->MainModel->getAllSanaFromSinf($dd['id_fan'][0]);
			$cntData['btnAddPressed']=123;
			$cntData['bahoProblem']=$this->MainModel->getAllFromBaho();*/
		
		}	
				
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('baho',$cntData,$cdata);
		$this->load->view('footer');

		
	}
}
