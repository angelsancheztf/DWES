<?php

$servername = "localhost";
$database = "world";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, "world");

if (isset($_POST["tabla"])) {

    if ($_POST["tabla"] == "1") {
        $consulta = 'UPDATE city SET Name = "' . $_POST["newName"] . '" WHERE  Name= "' . $_POST["name"] . '"';
        $conn->query($consulta);
    }
    if ($_POST["tabla"] == "2") {
        $consulta = 'DELETE FROM city WHERE Name= "' . $_POST["name"] . '";';
        $conn->query($consulta);
    }
    if ($_POST["tabla"] == "3") {
        $consulta = 'INSERT INTO city (Name, CountryCode) values ("' . $_POST["name"] . '", "' . $_POST["code"] . '") ;';
        $conn->query($consulta);
    }
    if ($_POST["tabla"] == "4") {
        $conex = new mysqli("localhost", "root", "", "world");
        mysqli_report(MYSQLI_REPORT_ALL);
        $conex->query('CREATE TABLE ' . $_POST["country"].'_new'.' AS SELECT * FROM City WHERE CountryCode = "' . $_POST["country"] . '"; ');
    }
}

?>