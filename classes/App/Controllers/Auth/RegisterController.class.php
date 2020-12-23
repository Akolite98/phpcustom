<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

class RegisterController extends Controller{

    public function registeratrion_controller(){
        $this->assign_value_to_class_variable($_POST);
        $this->check_user_inputs();
        $this->send_error_message();
        $this->check_for_user_duplication_on_database();
        $this->send_error_message();
        $this->insert_user_data_into_database();
        $this->initialize_sessions_and_redirect_to_dashboard();
    }


    public function assign_value_to_class_variable($data){
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->password_confirmation = $data['password_confirmation'];
        $this->data = $data;

        if($data['agreement']){
            $this->agreement = $data['agreement'];
        }
    }

    public function check_user_inputs(){
        if(empty($this->name) || empty($this->email) || empty($this->password) || empty($this->password_confirmation) || empty($this->agreement))
        {
            $this->data['error'] = 'Please fill out all fields'; 
            $this->err = true;

        }elseif(!preg_match("/^[a-zA-Z -_]*$/", $this->name)){
            $this->data['error'] = 'Your name input is invalid';
            $this->err = true;

        }elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){

            $this->data['error'] = 'Your email input is invalid';
            $this->err = true;

        }elseif(strlen($this->password) < 6){

            $this->data['error'] = 'Your password must be more than 6 characters';
            $this->err = true;

        }elseif(preg_match("/^[a-zA-Z0-9]*$/", $this->password)){

            $this->data['error'] = 'Your password must contain atleast one special character';
            $this->err = true;

        }elseif($this->password != $this->password_confirmation){

            $this->data['error'] = 'Your password does not match';
            $this->err = true;

        }else{
            $this->err = false;
        }
    }

    public function send_error_message(){
        if($this->err === true){
            session_start();
            $_SESSION['flash_message'] = $this->data['error'];
            $_SESSION['data'] = $this->data;
            header("Location: /auth/register");

            exit();
        }
    }

    public function check_for_user_duplication_on_database(){
        $query = "SELECT * FROM users WHERE email='$this->email';";
        $this->dbQuery = self::query($query);

        if(count($resuthis->dbQuery) > 0){
            $this->data['error'] = 'User with email exists already';
            $this->err = true;
        }else{
            $this->err = false;
        }
    }

    public function insert_user_data_into_database(){
        $hashed_password = password_hash($this->password, PASSWORD_DEFAULT);
        $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (?,?,?)";
        $result = self::query($query, array($this->name, $this->email, $hashed_password));
    }

    public function initialize_sessions_and_redirect_to_dashboard(){
        if($_SESSION){
            session_start();
        }

        $_SESSION['user'] = $this->dbQuery;
        header("Location: /dashboard");
    }

}