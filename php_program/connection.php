<?php

$conn = mysqli_connect("localhost", "root", "system");

if($conn)
{
    echo "Connected Successfully";
}
else
{
    echo "Connection error: " . $conn->connection_error;
}
?>