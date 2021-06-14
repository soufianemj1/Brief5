<?php
require_once __DIR__.'/../model/admin.php';
require_once __DIR__.'/../model/enseignant.php';
session_start();
class Login
{
    public function index(){
        require_once __DIR__.'/../view/login.php';
    }

 public function loginPage(){
    if(isset($_POST['login']) && isset($_POST['password'])){
        $login=$_POST['login'];
        $password=$_POST['password'];
        $admin = new admin;
        $enseignant=new modelEnseignant;
        $Admin=$admin->login($login,$password);
        $Enseignant=$enseignant->login($login,$password);
        if (!empty($Admin)){
            $_SESSION['Admin']=$Admin['id'];
            // print_r($Admin);
            header('location:http://localhost/mvcBrief5/salle/');
        }
        else if(!empty($Enseignant)){
            $_SESSION['Enseignant']=$Enseignant['id'];
            // print_r($_SESSION['Enseignant']);
            header('location:http://localhost/mvcBrief5/reservation/');
        }else {
            $this->index();
        }
    }
 }
    
}