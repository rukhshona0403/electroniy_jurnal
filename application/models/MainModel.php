<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model {

    public function getAllFromFan() {
        $this->db->from('subject');
        $this->db->select('subject.subject_name');
        return $this->db->get()->result_array();
    }
        public function getAllFromSinf() {
         $this->db->from('classes');
        return $this->db->get()->result_array();
        }  
        public function getAllFromSana() {
         $this->db->from('date');
        return $this->db->get()->result_array();
        } 

        public function getAllFanFromSinf($dd) {
            $this->db->select('subject.nomi_fan');
             $this->db->from('subject');
             $this->db->where('subject.id', $dd);
             return $this->db->get()->result_array();
         }
         public function getAllSanaFromSinf($dd) {
           $this->db->select('date.sanai_ruz');
            $this->db->from('date');
            $this->db->where('date.id', $dd);
            return $this->db->get()->result_array();
        }
        public function getAllFronThemes($dd) {
            $this->db->select('themes.themes_name');
            $this->db->select('themes.home_work');
             $this->db->from('themes');
             $this->db->where('date.id', $dd);
             return $this->db->get()->result_array();
         }
         
         public function EnterFromLogin($data) {
            // Убедимся, что входные данные не пустые
            if (empty($data['login']) || empty($data['password'])) {
                echo "Логин и пароль не должны быть пустыми.";
                return [];
            }
        
            // Запрос к базе данных для поиска пользователя по логину
            $this->db->from('teacher');
            $this->db->select('login, password');
            $this->db->where('login', $data['login']);
            $query=$this->db->get();
        
            // Проверяем, удалось ли получить результат
            if ($query->num_rows() > 0) {
                $user = $query->row_array();
        
                // Проверка пароля
                if ($user['password']== $data['password']) {
                    // Если пароль правильный, выполняем редирект
                    header('Location: http://localhost/jurnal/index.php/Asosi2');
                    exit();
                } else { $b="Неверный пароль.";
                $this->load->view('login',$b);
                   echo $b;
                }
            } else {
                $b= "Пользователь с таким логином не найден.";
            echo $b;
            $this->load->view('login',$b);
            }
        
        
            return [$b];
        }
        
}
