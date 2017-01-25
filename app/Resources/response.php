<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 1/23/17
 * Time: 2:57 PM
 */

include('config.php');

if (isset($_POST["id"])){
    $id = $_POST["id"];
    $age = $_POST["age"];
    $group = $_POST["group"];
    $connections = $_POST["connections"];

    $stmt = $conn->prepare("
            INSERT
            INTO connectors(
              `id`,
              `email`,
              `age`,
              `group`,
              `connections`,
              `event_timestamp`)
            VALUES ('', ?, ?, ?, ?, CURRENT_TIMESTAMP)");

    $stmt->bind_param('sisi', $id, $age, $group, $connections);

    $stmt->execute();

    $stmt->free_result();

    $conn->close();

} elseif (isset($_GET["id"])){
    $id = $_GET["id"];

    $query = "SELECT *
            FROM connectors");

    $response = $conn->query($query);


}