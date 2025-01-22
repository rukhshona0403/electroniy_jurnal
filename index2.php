<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
         $this->load->view('login');
    }

    public function process()
    {
        $dd['login'] = $this->input->post('login'); 
        $dd['password'] = $this->input->post('password'); 
        $this->load->model("MainModel"); 
        $this->MainModel->loginId($dd);
    }
    
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model {

    public function loginId(array $data) {
        if ($data['login'] == "ruxshona" && $data['password'] == "123456") {
            header('Location: http://localhost/jurnal/');
            exit();
        } else {
            echo "Неверный логин или пароль.";
        }
    }
    public function register_user(array $data) {

        if ($data = array(
            'username' => 'Ruxshona',
            'email' => 'rayimberdievarukhshona@gmail.com',
            'password' => password_hash('11111', PASSWORD_BCRYPT),
            'education' => 'Высшее'
        )) {
            return "Данные успешно добавлены!";
            header('Location: http://localhost/jurnal/');
            exit();
        } else {
            return "Ошибка добавления данных: ";
        }
    }


    public function login_user($email, $password) {
        // Ищем пользователя по email
        $this->db->where('email', $email);
        $query = $this->db->get('register');
    
        if ($query->num_rows() === 1) {
            $user = $query->row();
    
            // Проверяем хэшированный пароль
            if (password_verify($password, $user->password)) {
                return $user; // Возвращаем объект пользователя
            }
        }
    
        return false; // Если пользователь не найден или пароль неверный
    }
    

}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация и Вход</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(120deg, #89f7fe, #66a6ff); /* Градиентный фон */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        .form-box {
            background: rgba(255, 255, 255, 0.95); /* Полупрозрачный фон */
            border-radius: 15px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 350px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .form-box:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
        }
        .form-box h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s;
        }
        .form-group input:focus, .form-group select:focus {
            border-color: #89f7fe,;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(90deg, #89f7fe, #66a6ff);
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }
        .form-group button:hover {
            background: linear-gradient(90deg, #8fd3f4, #84fab0);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Вход</h2>
            <form action="Login/process" method="POST">
                <div class="form-group">
                    <label for="login">Имя пользователя</label>
                    <input type="text" value="" name="login" id="login" placeholder="Введите имя" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" value="" name="password" id="password" placeholder="Введите пароль" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="loginId" value="loginId">Войти</button>
                </div>
                <div class="form-group">
                    <button type="submit" name="registerId" value="registerId" >Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
