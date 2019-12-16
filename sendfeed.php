<?php
    $servername = "localhost";
    $username = "id11671121_feedback";
    $password = "feedback";
    $dbname = "id11671121_feedback";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $name = $_POST["name"];
    $message = $_POST["message"];
    $email = $_POST["email"];
    $service = $_POST["service"];


    $sql = "INSERT INTO feedback (Name, Email, Service, Description) VALUES ('$name', '$email', '$service','$message')";
    if ($conn->query($sql) === TRUE) {
        include "dashboard.html";
    } 
    else {
        include "contact.html";
    }
    
    $conn->close();
?>