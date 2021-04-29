<?php

class connection{
    
    public $servername='localhost';
    public $dbname='reservation_salle';
    public $user='root';
    public $pass='';

    public function connect(){
        try {
           $db = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->user, $this->pass);
           echo "sucess";

        } catch (PDOException $e) {
            print "Erreur :" . $e->getMessage() . "<br>";
        }
    }
}
