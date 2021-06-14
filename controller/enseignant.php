<?php
require_once __DIR__."/../model/matiere.php";

class enseignant {

    function index(){   
        $matiere= new MatiereModel();
        $obj = $matiere->select();
        require_once __DIR__."/../view/enseignant/registre.php";
    }

    function signup()
    {
        require_once __DIR__."/../model/enseignant.php";
        $user= new ModelEnseignant();
        if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['idMatiere']))
        {
            if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['idMatiere']))
            {
                $nom=$_POST['nom'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $idMatiere=$_POST['idMatiere'];
                $user->signup($nom,$email,$password,$idMatiere);
                header('location:http://localhost/mvcBrief5/view/home.php');

            }
        }
    }
}
    ?>