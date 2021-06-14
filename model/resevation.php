<?php
 require_once __DIR__.'/../model/connexion.php';
 


 class modelReservation {

    
    function reserver($salle,$groupe,$date,$time,$user) {
        $con= new Connection();
	    	$con=$con->connect();
		    $sql="INSERT INTO `cours`(`time`,`id_salle`,`id_groupe`,`id_enseignant`,`date`) VALUES ('$time',$salle,$groupe,$user,'$date')";
	    	$query=$con->query($sql);
    }


    function afficher()
    { 
        $con= new Connection();
	    $con=$con->connect();
        $sql="SELECT cours.id,enseignant.nom,salle.libelle_salle,groupe.libelle_groupe,cours.date,cours.time FROM cours,salle,enseignant,groupe WHERE enseignant.id=cours.id_enseignant AND salle.id=cours.id_salle AND groupe.id=cours.id_groupe";
        $query=$con->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }



    function delete($id)
    {
        $con =new Connection();
        $con=$con->connect();
        $sql="DELETE FROM `cours` WHERE id=$id";
        $query=$con->query($sql);

    }
    function champs(){
        echo "<script>
            alert('veuillez remplir les champs !')
            </script>";
    }



     

   

 }