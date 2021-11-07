<?php
	header('Accecc-Control-allow-origin: *');
	header('Content-Type: application/json');


	include_once '../../config/Database.php';
	include_once '../../models/Genres.php';

	// Instantiate DB & connect
	$database = new Database();
	$db = $database->connect();

	// Instantiate DB & connect
	$genres = new Genres($db);

	// All Genre query
	$result = $genres->all();

	// Validate items are in the database
	$num = $result->rowCount();
	if( $num > 0 ){
		$genre_arr = array();
		$genre_arr['data'] = array();

		while($row = $result->fetch(PDO::FETCH_ASSOC)) {
			extract($row);

			$genre_item = array(
				'title' => $title
			);
			array_push($genre_arr['data'], $row);
		}

		$one_item_string = json_encode($genre_arr['data']);
		$random_number = rand(0, count($genre_arr['data']) - 1);
		$one_item = $genre_arr['data'][$random_number];

		// echo $results;
		echo json_encode($one_item['title']);

	} else {
		echo "Sorry, no genres in the database";
	}
