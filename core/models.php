<?php

require_once 'dbConfig.php';

function getAllUsers($pdo) {
	$sql = "SELECT * FROM pilot
			ORDER BY first_name ASC";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getUserByID($pdo, $id) {
	$sql = "SELECT * from pilot WHERE user_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function searchForAUser($pdo, $searchQuery) {

	$sql = "SELECT * FROM pilot WHERE
			CONCAT(first_name, last_name, rank, successful_flights, aircraft_assigned)
			LIKE ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(["%".$searchQuery."%"]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}



function insertNewUser($pdo, $first_name, $last_name, $rank,
	$successful_flights, $aircraft_assigned) {

	$sql = "INSERT INTO pilot
			(
				first_name,
				last_name,
				rank,
				successful_flights,
				aircraft_assigned
			)
			VALUES (?,?,?,?,?)
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([
		$first_name, $last_name, $rank,
		$successful_flights, $aircraft_assigned
	]);

	if ($executeQuery) {
		return true;
	}

}

function editUser($pdo, $first_name, $last_name, $rank,
$successful_flights, $aircraft_assigned, $user_id) {

	$sql = "UPDATE pilot
				SET first_name = ?,
					last_name = ?,
					rank = ?,
					successful_flights = ?,
					aircraft_assigned = ?
				WHERE user_id = ?
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$first_name, $last_name, $rank,
    $successful_flights, $aircraft_assigned, $user_id]);

	if ($executeQuery) {
		return true;
	}

}


function deleteUser($pdo, $user_id) {
	$sql = "DELETE FROM pilot
			WHERE user_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$user_id]);

	if ($executeQuery) {
		return true;
	}
}




?>
