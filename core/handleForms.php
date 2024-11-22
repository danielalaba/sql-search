<?php

require_once 'dbConfig.php';
require_once 'models.php';
session_start();

if (isset($_POST['insertUserBtn'])) {
	$insertUser = insertNewUser($pdo,$_POST['first_name'], $_POST['last_name'], $_POST['rank'], $_POST['successful_flights'], $_POST['aircraft_assigned'], $_POST['id']);

	if ($insertUser) {
		$_SESSION['message'] = "Successfully inserted!";
		header("Location: ../index.php");
	}
}


if (isset($_POST['editUserBtn'])) {
	$editUser = editUser($pdo,$_POST['first_name'], $_POST['last_name'], $_POST['rank'], $_POST['successful_flights'], $_POST['aircraft_assigned'], $_GET['id']);

	if ($editUser) {
		$_SESSION['message'] = "Successfully edited!";
		header("Location: ../index.php");
	}
}

if (isset($_POST['deleteUserBtn'])) {
	$deleteUser = deleteUser($pdo,$_GET['id']);

	if ($deleteUser) {
		$_SESSION['message'] = "Successfully deleted!";
		header("Location: ../index.php");
	}
}

if (isset($_GET['searchBtn'])) {
	$searchForAUser = searchForAUser($pdo, $_GET['searchInput']);
	foreach ($searchForAUser as $row) {
		echo "<tr>
				<td>{$row['first_name']}</td>
				<td>{$row['last_name']}</td>
				<td>{$row['rank']}</td>
				<td>{$row['successful_flights']}</td>
				<td>{$row['aircraft_assigned']}</td>

			  </tr>";
	}
}

?>
