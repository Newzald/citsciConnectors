<?php
/**
* Created by PhpStorm.
* User: Ian
* Date: 1/25/17
* Time: 1:42 PM
*/
$url = parse_url(getenv("CLEARDB_DATABASE_URL")); // Heroku lets db info be hidden in environment vars

$host = $url["host"];
$user = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($host, $user, $password, $db);

$request = $_GET["req"];
$data = $_GET["data"];


$query = "SELECT * FROM connections WHERE id = ".$data." ";

$response = $conn->query($query);
for ($set = array(); $row = $response->fetch_assoc(); $set[] = $row);

//$email = $set["email"];
$age = $set["age"];
$group = $set["group"];
$connections = $set["connections"];

$query_ages = "SELECT AVG(connections) AS 'Total', age
            FROM connectors
            GROUP BY age";
$response = $conn->query($query_ages);
for ($set_ages = array(); $row = $response->fetch_assoc(); $set_ages[] = $row);

$response->close();

$query_groups = "SELECT AVG(connections) AS 'Total', group
            FROM connectors
            GROUP BY group";
$response = $conn->query($query_groups);
for ($set_groups = array(); $row = $response->fetch_assoc(); $set_groups[] = $row);

$response->close();

$query_total = "SELECT AVG(connections) AS 'Total'
            FROM connectors";

$response = $conn->query($query_total);
for ($set_pop = array(); $row = $response->fetch_assoc(); $set_pop[] = $row);

$response->close();

$results = array(
    "pop" => $set_pop,
    "ages" => $set_ages,
    "groups" => $set_groups,
    "conn" => $connections
);