<?php

$servername = "localhost";
$database = "phpdasar";
$username = "root";

$conn = mysqli_connect("$servername", "$username", "", "$database");
function Query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    // $rows = mysqli_fetch_assoc($result);
    return $rows ;
}
?>