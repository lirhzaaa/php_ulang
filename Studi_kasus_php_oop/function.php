<?php
$server = mysqli_connect("localhost", "root", "", "studikasus");

function query($query){
    global $server;
    $result = mysqli_query($server, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $row[] = $row;
    }
    return $rows;
}