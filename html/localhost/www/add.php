<?php
/*
 * This script will be replaced by library methods
 */
print_r($_POST);

$mysqli = new mysqli("localhost", "root", "password_0", "students");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$sql = "INSERT INTO students (name, surname, male, birthday, id_faculty) 
VALUES ('".$_POST['name']."','".$_POST['surname']."','".$_POST['sex']."','".$_POST['birthday']."','".$_POST['id_faculty']."')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();