<?php
/*
 * This script will be replaced by library methods
 */
print_r($_POST);

$id = $_POST["row"];

$mysqli = new mysqli("localhost", "root", "password_0", "students");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

switch ($_POST["button"]) {
	case 'del':
		echo "del<br/>";
		foreach ($id as $key => $value) {
			$sql = "DELETE FROM students WHERE id = ".$value.";";
			if ($mysqli->query($sql) === TRUE) {
			    echo "Records deleted successfully<br/>";
			} else {
			    echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		break;
	case 'edit':
		echo "edit<br/>";
		break;
	default:
		echo "Error<br/>";
		break;
}