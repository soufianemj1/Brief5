<?php
require_once 'connexion.php';
class Admin 
{
    public function login($login,$password)
    {
        $con= new Connection ();
        $con=$con->connect();
        $sql="SELECT * FROM admin WHERE login='$login' AND password='$password'";
        $query=$con->query($sql);
        
        if($query->rowCount() > 0){
           $row= $query->fetchAll(PDO::FETCH_ASSOC);
            return $row[0];
        }else{
            return false;
        }
    
    }
}