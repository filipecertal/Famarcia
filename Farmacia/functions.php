<?php



function db_connect()
{
	$db = NULL;

	try 
	{

		$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);

	}
	catch (PDOException $e) 
	{
    	print "Error!: " . $e->getMessage() . "<br/>";
    	die();
	}

	return $db;
}


?>