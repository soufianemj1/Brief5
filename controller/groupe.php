<?php
		require_once __DIR__.'/../model/groupe.php';
		session_start ();

class Groupe
{
	
	function index()
	{  
		 $create=new GroupeModel;
		 $groupes=$create->select();
		 if (isset($_SESSION['Admin'])) {
			require_once __DIR__.'/../view/groupe/groupe.php';

		 }
		 else {
			require_once __DIR__.'/../view/login.php';

		 }
		

		
	}

	

	function create()
	{      
		
			$libelle=$_POST['libelle'];
			$effectif=$_POST['effectif'];
			$create=new GroupeModel;
			$add=$create->create($libelle,$effectif);
		    header('location:http://localhost/mvcBrief5/groupe');

			
	
	}

	function edit()
	{
		$id=$_POST['id'];
		$obj=new groupeModel;
		$obj= $obj->edit($id);
		require __DIR__.'/../view/groupe/editGroupe.php';
		
	}

	function update()
	{
	$id=$_POST['id'];
	$obj=new GroupeModel;
	$obj=$obj->update($_POST['id'],$_POST['libelle'],$_POST['effectif']);
	header('location:http://localhost/mvcBrief5/groupe');
	
	}

	function delete()
	{
	$id=$_POST['id'];
	$del=new GroupeModel;
	$delete=$del->delete($id);

	header('location:http://localhost/mvcBrief5/groupe');
	}
	function singOut()
    {
        session_unset();
        session_destroy();
        header('location:http://localhost/mvcBrief5/login/');


    } 

}
