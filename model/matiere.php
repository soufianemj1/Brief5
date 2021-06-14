<?php
 require_once __DIR__.'/../model/connexion.php';
 class MatiereModel {
     private $idMatiere;
     private $libelle_matiere;
     private $con;


     function create($libelle)
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="INSERT INTO `matiere`(`libelle_matiere`) VALUES ('$libelle')";
		$query=$con->query($sql);

	}

    function select()
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="SELECT * FROM `matiere`";
		$query=$con->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	function delete($id)
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="DELETE FROM `matiere` WHERE id=$id";
		$query=$con->query($sql);
	}

	function edit($id)
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="SELECT * FROM `matiere` WHERE id=$id";
		$query=$con->query($sql);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	function update($id,$libelle)
	{
		$con= new Connection();
		$con=$con -> connect();
		$sql="UPDATE `matiere` SET `libelle_matiere`='$libelle' WHERE id=$id";
		$query=$con->query($sql);


	}


       
     
     

 }