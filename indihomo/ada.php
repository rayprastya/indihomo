<?php
    $conn = new mysqli("localhost","root","","coba");
    if ($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }

?>