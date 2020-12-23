<?php 

namespace App\Controllers\Dashboard;

use App\Controllers\Controller;
use App\Core\Globals;

class DashboardController extends Controller{

    public function __construct($arg){
        if($arg == true){
           $this->redirect_if_not_authenticated();
        }
    }

    public function index(){
        Globals::view('app/home/dashboard');
    }

    public function profile(){
        Globals::view('app/profile/profile');
    }

    public function update_profile(){
        if(!$_SESSION){
            session_start();
        }

        $id = $_SESSION['user']['id'];

        $query = "UPDATE users SET name=?, email=?, location=? WHERE $id";
        $update = self::query($query, [$_POST['name'], $_POST['email'], $_POST['location']]);
        $this->dbQuery = self::query('SELECT * FROM users WHERE $id');

        // unset($_SESSION['user']);

        if($_SESSION['user'] = $this->dbQuery[0]){
            header('Location: /profile');
        }
    }

    public function redirect_if_not_authenticated(){
       if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION['user'])){
            $_SESSION['flash_message'] = 'You must be logged in to continue';
            header("Location: /auth/login");
        } 
    }
}