<?php 

namespace App\Controllers\Auth;

use App\Core\Globals;
use App\Controllers\Controller;

class AuthController extends Controller{

    public function __construct($arg){
        if($arg == true){
            $this->set_session_if_remember();
        }
    }

    public function login(){
        Globals::view('auth/login');
    }

    public function register(){
        Globals::view('auth/register');
    }

    public function set_session_if_remember(){
        if(isset($_COOKIE['user'])){
            $id = $_COOKIE['user'];
            $query = "SELECT * FROM users WHERE $id;";
            $this->dbQuery = self::query($query);

            if(count($this->dbQuery) > 0){
                $this->token = $_COOKIE['user_credentials'];
                $this->db_token = $this->dbQuery[0]['remember_token'];

                $this->check_token();
                $this->initialize_session_or_delete_token();
            }
        }
    }

    public function check_token(){
        $verify = password_verify($this->token, $this->db_token);

        if($verify == true){
            $this->check_token = true;
        }else{
            $this->check_token = false;
        }
    }

    public function initialize_session_or_delete_token(){
        if($this->check_token != true){
            setcookie('user', time()-100);
            setcookie('user_credentials', time()-100);
        }else{
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['user'] = $this->dbQuery[0];
            header("Location: /dashboard");
        }
    }

    public function redirect_if_authenticated(){
        if(!isset($_SESSION)){
            session_start();
        }

        if(isset($_SESSION['user'])){
            header("Location: /dashboard");
        }
    }

}