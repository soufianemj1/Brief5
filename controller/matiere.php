<?php
		require_once __DIR__.'/../model/matiere.php';
		session_start();

class Matiere
{
	
	function index()
	{  
		 $create=new MatiereModel;
		 $matieres =$create->select();
		 if(isset($_SESSION['Admin'])){
			require_once __DIR__.'/../view/matiere/matiere.php';

		 }
		 else {
			require_once __DIR__.'/../view/login.php';
		 }
		

		

	}

	

	function create()
	{      
		
			$libelle=$_POST['libelle'];
			$create=new MatiereModel;
			$add=$create->create($libelle);
		    header('location:http://localhost/mvcBrief5/matiere');

			
	
	}

	function edit()
	{
		$id=$_POST['id'];
		$obj=new MatiereModel;
		$obj= $obj->edit($id);
		require __DIR__.'/../view/matiere/editMatiere.php';
		
	}

	function update()
	{
	$id=$_POST['id'];
	$obj=new MatiereModel;
	$obj=$obj->update($_POST['id'],$_POST['libelle']);
	header('location:http://localhost/mvcBrief5/matiere');
	
	}

	function delete()
	{
	$id=$_POST['id'];
	$del=new MatiereModel;
	$delete=$del->delete($id);

	header('location:http://localhost/mvcBrief5/matiere');
	}
	function singOut()
    {
        session_unset();
        session_destroy();
        header('location:http://localhost/mvcBrief5/login/');


    } 

}
