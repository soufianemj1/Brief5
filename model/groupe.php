<?php
 require_once __DIR__.'/../model/connexion.php';
 class GroupeModel {
     private $idgroupe;
     private $libelle_groupe;
     private $effectif;
     private $con;


     function create($libelle,$effectif)
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="INSERT INTO `groupe`(`libelle_groupe`, `effectif`) VALUES ('$libelle','$effectif')";
		$query=$con->query($sql);

	}

	function selectID($id)
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="SELECT `effectif` FROM `groupe` WHERE id=$id";
		$query=$con->query($sql);
		$capacite=$query->fetchAll(PDO::FETCH_ASSOC);
		return $capacite;


	}

    function select()
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="SELECT * FROM `groupe`";
		$query=$con->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	function delete($id)
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="DELETE FROM `groupe` WHERE id=$id";
		$query=$con->query($sql);
	}

	function edit($id)
	{
		$con= new Connection();
		$con=$con->connect();
		$sql="SELECT * FROM `groupe` WHERE id=$id";
		$query=$con->query($sql);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	function update($id,$libelle,$effectif)
	{
		$con= new Connection();
		$con=$con -> connect();
		$sql="UPDATE `groupe` SET `libelle_groupe`='$libelle',`effectif`='$effectif' WHERE id=$id";
		$query=$con->query($sql);


	}


       
     
     

 }