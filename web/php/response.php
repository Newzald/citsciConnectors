<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 1/23/17
 * Time: 2:57 PM
 */

//require('/php/config.php');

$url = parse_url(getenv("CLEARDB_DATABASE_URL")); // Heroku lets db info be hidden in environment vars

$host = $url["host"];
$user = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_errno > 0)
{
    die('Unable to connect to database [' . $conn->connect_error . ']');
}

$id = $_POST["id"];
$age = $_POST["age"];
$group = $_POST["group"];
$connections = $_POST["connections"];

$query = "INSERT INTO connectors VALUES ('', '".$id."', '".$age."', '".$group."', '".$connections."', CURRENT_TIMESTAMP)");

$conn->query($query);

$conn->close;

/*
$stmt = $conn->prepare("INSERT INTO connectors VALUES ('', ?, ?, ?, ?, CURRENT_TIMESTAMP)");

$stmt->bind_param('sisi', $id, $age, $group, $connections);

$stmt->execute();

$stmt->close();

$conn->close();
elseif (isset($_GET["id"])){
   $id = $_GET["id"];

   $query = "SELECT *
           FROM connectors";

   $response = $conn->query($query);


}