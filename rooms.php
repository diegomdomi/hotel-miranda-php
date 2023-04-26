<?php
include './config.php';
include './db/connection.php';


$get_all_rooms = "SELECT * FROM room";
$result_all_rooms = $conn->query($get_all_rooms);
echo $blade->run("rooms", array("rooms" => $result_all_rooms->fetch_all(MYSQLI_ASSOC), "rooms_length" => $result_all_rooms->num_rows));



