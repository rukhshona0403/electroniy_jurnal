<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  
    // public function index() 
    // {   $cntData['urlPage']=base_url().'jurnal/index.php/login.php';
    //     $this->load->model('MainModel');
    //     $this->load->view('login'); 
    //     if($this->input->post('btnEnter')){
    //       $dd[0]=$this->input->post('login');
    //       $dd[1]=$this->input->post('password');
    //       $this->MainModel->EnterFromLogin($dd);
      
    //     }
    //     else {
    //       echo "swdfgh";
    //     }
    // } первый способ
    
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
  
        //       if ($result) {
        //           echo "Вход успешен!";
        //           redirect('/view/asosi2');
        //       } else {
        //           echo "Неверный логин или пароль.";
        //       }
        //   } else {
        //       echo "Поля логина и пароля не должны быть пустыми.";
        //   }
        }
      }
  
      
  }
  


} 
        
    
        
 