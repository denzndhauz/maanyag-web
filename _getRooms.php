<?php
	include_once 'core/init.php';
	$db = DB::getInstance();


	//get All rooms
	$stmt = $db->query("SELECT * FROM rooms");
	
	if(!$stmt->error()) {	
		//fetch all
		echo json_encode($stmt->results());
	}