<?php

include './config.php';
include './db/connection.php';
include "./utils/throw_alert.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact = [
        "id" => rand(0, 100),
        "date" => date("d-m-Y"),
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"],
        "subject" => $_POST["subject"],
        "comment" => $_POST["comment"],
        
    ];
    if (empty($contact)) {
        echo "Complete all inputs";
    } else {
        echo $contact;
    }
    
    $sql = "INSERT INTO reviews(id,date, name, email, phone, comment) VALUES ('".$contact["id"]."','".$contact["date"]."', '".$contact["name"]."', '".$contact["email"]."', '".$contact["phone"]."','".$contact["subject"]."', '".$contact["comment"]."', );";

    $conn->query($sql);
    throw_alert("Contact saved on DB");
    $conn->close();
}

echo $blade->run("contact");