<?php
require_once 'connexion.php';

class ModelEnseignant 
{
    public function login($login,$password)
    {
        $con= new Connection ();
        $con=$con->connect();
        $sql="SELECT * FROM enseignant WHERE email='$login' AND password='$password'";
        $query=$con->query($sql);
        
        if($query->rowCount() > 0){
           $row= $query->fetchAll(PDO::FETCH_ASSOC);
            return $row[0];
        }else{
            return false;
        }
    
    }

    public function signup($nom,$email,$password,$idMatiere)
    {
        
        $con= new Connection ();
        $con=$con->connect();
        $sql="INSERT INTO `enseignant`(`nom`, `email`, `password`, `idMatiere`) VALUES ('$nom','$email', '$password',$idMatiere)";
        $con->query($sql);
    }
}