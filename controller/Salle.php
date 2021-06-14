<?php
		require_once __DIR__.'/../model/salle.php';
session_start();
class Salle
{
	
	function index()
	{  
		 $create=new SalleModel;
		 $salles=$create->select();
		
		if (isset($_SESSION['Admin'])){
		require_once __DIR__.'/../view/salle/index.php';
		}else {
		require_once __DIR__.'/../view/login.php';
		}
	}

	

	function create()
	{      
		
			$libelle=$_POST['libelle'];
			$capacite=$_POST['capacite'];
			$create=new SalleModel;
			$add=$create->create($libelle,$capacite);
		    header('location:http://localhost/mvcBrief5/salle/index');

			
	
	}

	function edit()
	{
		$id=$_POST['id'];
		$obj=new SalleModel;
		$obj= $obj->edit($id);
		require __DIR__.'/../view/salle/salleEdit.php';
		
	}

	function update()
	{
	$id=$_POST['id'];
	$obj=new SalleModel;
	$obj=$obj->update($_POST['id'],$_POST['libelle'],$_POST['capacite']);
	header('location:http://localhost/mvcBrief5/salle/index');
	
	}

	function delete()
	{
	
	
	$del=new SalleModel;
	$delete=$del->delete($_POST['id']);
	header('location:http://localhost/mvcBrief5/salle/index');

	}
	function singOut()
    {
        session_unset();
        session_destroy();
        header('location:http://localhost/mvcBrief5/login/');


    } 

}
