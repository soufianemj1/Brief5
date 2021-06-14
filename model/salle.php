<?php
 require_once __DIR__.'/../model/connexion.php';
 class SalleModel {
     private $idSalle;
     private $libelle_salle;
     private $capacite;
     private $con;


     function create($libelle,$capacite)
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="INSERT INTO `salle`(`libelle_salle`, `capacité`) VALUES ('$libelle','$capacite')";
		$query=$con->query($sql);
		

	}
	function selectID($id)
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="SELECT `capacité` FROM `salle` WHERE id=$id";
		$query=$con->query($sql);
		$capacite=$query->fetchAll(PDO::FETCH_ASSOC);
		return $capacite;


	}

    function select()
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="SELECT * FROM `salle`";
		$query=$con->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	function delete($id)
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="DELETE FROM `salle` WHERE id=$id";
		$query=$con->query($sql);
	}

	function edit($id)
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="SELECT * FROM `salle` WHERE id=$id";
		$query=$con->query($sql);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	function update($id,$libelle,$capacite)
	{
		$con= new Connection();
		$con=$con -> connect();
		$sql="UPDATE `salle` SET `libelle_salle`='$libelle',`capacité`='$capacite' WHERE id=$id";
		$query=$con->query($sql);


	}


       
     
     

 }