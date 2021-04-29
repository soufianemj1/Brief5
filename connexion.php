<?php 

class Connection {
    private $user='root';
    private $pass='';
    private $dbname='reservation_salle';
    private $server='localhost';
    private $db;
     public function connect() 
     {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=reservation_salle",$this->user,$this->pass);
          
            return $this->db;
        }
        catch(PDOException $e){
            echo "erreur".$e->getmessage();

        }
    }
    function delete($table,$id)
    {
        $qry="delete from ".$table." where id=".$id;

    }
    function select($id,$table)
    {
        $qryS="select*from".$table."where id=".$id;

    }
    
}



