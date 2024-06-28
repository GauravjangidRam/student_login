<?php 
    $servername ="localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "student_data";


    $conn = new mysqli($servername, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
?>