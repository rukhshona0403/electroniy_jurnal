<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baho extends CI_Controller {
	public function getStudent()
	{
		$this->load->model('MainModel');
		//$dd['id_teacher'] = $this->input->post('login');
		$dd[0] = $this->input->post('selFan');			
		$dd[1] = $this->input->post('selSinf');
		#echo $dd['subject_name'];
		
		echo 'sdfghj';
		echo $dd[0];
		$this->MainModel->getAllFromDate($this->input->post('btnSelect'),$dd);
		#$cdata['dataProblem']=$this->MainModel->getAllFromDate($dd);
		#header('location:'.base_url().'index.php/Baho');
	}

	public function index()
	{
		$cntData['urlPage']=base_url().'index.php/Baho';
		$this->load->model('MainModel');
		$cntData['dtProblem']=$this->MainModel->getAllFromFan();
		$cntData['sinfProblem']=$this->MainModel->getAllFromSinf();
		$cntData['sanaProblem']=$this->MainModel->getAllFromSana();
		
		if($this->input->post('btnSelect')) {
			$cntData['btnSelectPressed']=123;
			header('Location:'.base_url().'index.php/Baho/getStudent/'.$this->input->post('btnSelect'));
			
			
			#$this->load->view('baho',$cdata);
		
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
		$this->load->view('baho',$cntData);
		$this->load->view('footer');

		
	}
}
