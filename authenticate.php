<?php
    $servername = "localhost";
    $username = "id11671121_coderunner";
    $password = "coderunner";
    $dbname = "id11671121_coderunner";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $user = $_POST["username"];
    $passw = $_POST["passw"];
    $date = date('Y-m-d H:i:s');
    
    $sql = "SELECT Password from coderunner WHERE Username = '$user'";
    $res = $conn->query($sql);
    if ($res->num_rows>0) 
    {
        $row = $res->fetch_assoc();
        if($row["Password"]==$passw){
            $sql = "INSERT INTO ActiveUser (Name,Time) VALUES ('$user','$date')";
            $res = $conn->query($sql);
            include "dashboard.html";
        }
        else
            include "loginpage.html";
    }
    else 
    {
        include "loginpage.html";
    }
    
    $conn->close();
?>