<?php
    $servername = "localhost";
    $username = "id11671121_coderunner";
    $password = "coderunner";
    $dbname = "id11671121_coderunner";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $name = $_POST["name"];
    $pass = $_POST["password"];
    $email = $_POST["email"];
    $user = $_POST["username"];
    $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO coderunner (Name, Email, Username, Password) VALUES ('$name', '$email', '$user','$pass')";
    if ($conn->query($sql) === TRUE) {
        $sql = "INSERT INTO ActiveUser (Name,Time) VALUES ('$user','$date')";
        $res = $conn->query($sql);
        include "dashboard.html";
    } 
    else {
        include "signup.html";
    }
    
    $conn->close();
?>