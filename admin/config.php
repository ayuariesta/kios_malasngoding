<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "malasngoding_kios";
    $db = mysqli_connect($server, $user, $password, $nama_database);

    if( !$db ){
        die(mysqli_connect_error($db));
    }
?>