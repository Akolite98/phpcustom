<?php 

namespace App\Controllers\Auth;

use App\Controllers\Controller;

class LoginController extends Controller{

    private $err;

    public function login_controller(){
        $this->assign_value_to_class_variable($_POST);
        $this->check_user_inputs();
        $this->send_error_message();
        $this->check_if_user_exist();
        $this->send_error_message();
        $this->check_if_password_match();
        $this->send_error_message();
        $this->set_cookies_for_remembered_login();
        $this->initialize_sessions_and_redirect_to_dashboard();
    }

    public function assign_value_to_class_variable($data){
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->data = $data;
    }

    public function check_user_inputs(){
        if(empty($this->email) || empty($this->password)){

            $this->data['error'] = 'Please fill out all fields';
            $this->err = true;

        }elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){

            $this->data['error'] = 'Your email input is invalid';
            $this->err = true;

        }
    }

    public function send_error_message(){
        if($this->err === true){
            session_start();
            $_SESSION['flash_message'] = $this->data['error'];
            $_SESSION['data'] = $this->data;
            header("Location: /auth/login");

            exit();
        }
    }

    public function check_if_user_exist(){
        $query = "SELECT * FROM `users` WHERE email=?";
        $this->dbQuery = self::query($query, [$this->email]);

        if(count($this->dbQuery) > 0){
            return true;
        }else{
            $this->data['error'] = 'User does not exist';
            $this->err = true;
        }
    }

    public function check_if_password_match(){
        if(!password_verify($this->password, $this->dbQuery[0]['password'])){
            
            $this->data['error'] = 'Your password is not correct';
            $this->err = true;
        }
    }

    public function set_cookies_for_remembered_login(){
        if(isset($this->data['remember'])){
            $this->salt = str_shuffle("abcdefghijklmnopqrstuvwxyz");
            $this->token = password_hash($this->salt, PASSWORD_DEFAULT);
            setcookie('user', $this->dbQuery[0]['id'], time()+3600*24*30);
            setcookie('user_credentials', $this->salt, time()+3600*24*30);

            $this->update_database_user_token();
        }
    }

    public function update_database_user_token(){
        $query = "UPDATE users SET remember_token='$this->token' WHERE email='$this->email' ";
        $dbquery = self::query($query);
    }

    public function initialize_sessions_and_redirect_to_dashboard(){
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['user'] = $this->dbQuery[0];
        header("Location: /dashboard");
    }

    public function logout(){
        if(!isset($_SESSION)){
            session_start();
        }

        unset($_SESSION['user']);
        setcookie('user', false, time()-100000000);
        setcookie('user_credentials',false , time()-10000000);

        header("Location: /auth/login");
    }
}