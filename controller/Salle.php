<?php

/**
 * 
 */
class Salle
{
	
	function index()
	{
		require_once __DIR__.'/../view/salle/index.php';
	}

	function create()
	{
		require_once __DIR__.'/../view/salle/create.php';
	}

	function save()
	{
		echo 'save';
	}

	function edit($id)
	{
		echo "edit ".$id;
	}

	function update()
	{
		echo 'update';
	}

	function delete()
	{
		echo 'delete';
	}
}
