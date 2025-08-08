<?php
    $host = "127.0.0.1";
    $port = "3306";
    $user = "root";
    $pass = "ROOT@admin123";
    $db="testdb";
    
    $conn = new mysqli($host, $user, $pass, $db, $port);

    if($conn->connect_error){
        die("connection failed". $conn->connect_error);
    }
    echo "connected to MYSQL successfully";

    $sql = "SELECT id , name FROM students";
    $result = $conn->query($sql);
    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            echo "<br> ID: ".$row["id"]." - Name: ". $row["name"];
        }
    }
    else{
        echo "<br> No data Found!";
    }
    $conn->close();
    ?>