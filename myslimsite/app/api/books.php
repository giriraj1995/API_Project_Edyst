<?php

//display all records

$app->get('/api/books',function() {

	echo "Welcome to books ";

	require_once('dbconnect.php');

	$query="select * from books order by id";
	$result=$mysqli->query($query);

	while($row= $result->fetch_asoc()){
		$data[]=$row;
	}

	if(isset($data)){
			header('Content-Type: application/json');
			echo json_encode($data);


	}

});

//display single row