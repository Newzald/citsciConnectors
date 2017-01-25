<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 1/23/17
 * Time: 2:57 PM
 */

include('/php/config.php');

if (mysqli_connect_errno()) {
    return("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$id = $_POST["id"];
$age = $_POST["age"];
$group = $_POST["group"];
$connections = $_POST["connections"];

//$query = "INSERT INTO `connectors`"

$stmt = $conn->prepare("INSERT INTO connectors VALUES ('', ?, ?, ?, ?, CURRENT_TIMESTAMP)");

$stmt->bind_param('sisi', $id, $age, $group, $connections);

$stmt->execute();

$stmt->close();

$conn->close();
 /*elseif (isset($_GET["id"])){
    $id = $_GET["id"];

    $query = "SELECT *
            FROM connectors";

    $response = $conn->query($query);


}