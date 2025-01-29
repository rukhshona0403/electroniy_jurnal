<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller { 
    public function index()
  {
     $b='welcome'; 
      $this->load->model('MainModel');
      $this->load->view('login',$b);
  
      if ($this->input->post('btnEnter')) {
          $dd['login'] = $this->input->post('login');
          $dd['password'] = $this->input->post('password');
          
        if (!empty($dd['login']) && !empty($dd['password'])) {
    
          $this->MainModel->EnterFromLogin($dd);
  
        }
      }
  
      
  }
  


} 
        
    
        
 